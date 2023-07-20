<?php
namespace App\Providers;

use Illuminate\Http\Request;
use App\Models\CsvData;
use Illuminate\Support\Facades\Validator;

/**
 *
 * Include this trait in any CrudController and make provision for enabling configuration driven import functionality on that entity.
 * To enable import on any entity the following steps need to be undertaken.
 *
 * 1. use this trait in the respective entity controller.
 *
 * 2. Override the following methods.
 * a) importSampleFilename()
 * b) importInstructions()
 * c) importValidationRules()
 * d) importValidationMessages()
 * e) importCreate($entity)
 *
 * Instructions of how to override each of these methods is provided against each methods documentation.
 *
 * 3. Once you have imported this trait it allows you to add the following routes.
 * a) GET entityName/import
 * b) POST entityName/importParse
 * c) POST entityName/importProcess
 * d) GET entityName/importFormatDownload
 *
 * These routes get mapped to the methods with the same names which are present in this trait.
 *
 * 4. Optionally to have a more fine grained control over the import process you can override the following two methods.
 * a) beforeImport($entities)
 * b) afterImport($entities)
 *
 * Again both these methods specify the exact nature of the functionality they are exposing.
 *
 * Trait ImportAwareTrait
 * @package App\Services
 */
trait ImportAwareTrait
{
    /**
     * The entity should override this method to provide a new name for the sample CSV which will be
     * downloaded during the first step.
     *
     * Recommended To Override
     *
     * @return string
     */
    protected function importSampleFilename()
    {
        return 'export_sample.csv';
    }

    /**
     * Optionally you can override this method to provide a completely different view for the first step of the import process.
     *
     * Optional To Override
     *
     * @return string
     */
    protected function importView()
    {
        return 'common/import';
    }

    /**
     * You will never have to override this, however left this as a convenience just incase someone wants to override this method.
     *
     * Optional To Override
     *
     * @return string
     */
    protected function importParseView()
    {
        return 'common/import_parse';
    }

    /**
     * This view represents the last step of the import process, again optionally you can override this method to customise the
     * last step of the import process.
     *
     * Optional To Override
     *
     * @return string
     */
    protected function importProcessView()
    {
        return 'common/import_process';
    }

    /**
     * Override this method to provide an array of instructions. These instructions are then displayed in step 1
     * as a numbered list. The first instruction is always the default instruction to download the sample csv.
     *
     * Required To Override
     *
     * @return array
     */
    protected function importInstructions()
    {
        return [];
    }

    /**
     *
     * Override this method to provide an array of validation rules. The syntax to follow is the same as the syntax we
     * use for defining Laravel validation rules.
     * return [
     *      'user_id' => 'required',
     *      'package_id' => 'required',
     *      'company_id' => 'required',
     * ];
     *
     * Required To Override
     *
     * @return array
     *
     */
    protected function importValidationRules()
    {
        return [];
    }

    /**
     * Override this method to provide an array of validation rule failure messages. A sample return could be
     *
     * return [
     *      'user_id.required' => 'Specifying a user is mandatory when creating an appointment, please check if you have specified a valid name, email, date of birth (yyyy-mm-dd format) & contact number of the user.',
     *      'package_id.required' => 'Specifying a package name is mandatory when creating an appointment, please check if you have specified a valid package name.',
     *      'company_id.required' => 'Specifying a company name is mandatory when creating an appointment, please check if you have specified a valid company name.',
     * ];
     *
     * Required To Override
     *
     * @return array
     */
    protected function importValidationMessages()
    {
        return [];
    }

    /**
     *
     * After all foreign keys have been resolved and validation rules have run successfully for all rows, this method
     * is called with an array representing the entity which is to be created.
     *
     * Required To Override
     *
     * @param array $entity
     * @return mixed You need to return the created entity object, generally you can return the result of calling the create method on the entity class.
     */
    protected abstract function importCreate($entity);

    /**
     * Takes an array of entities representing all rows in the CSV as the argument.
     * Each entity passed to this method is actually an array object representing the fully resolved object where all validations have passed and foreign keys resolved.
     * You can optionally override this method to do any processing that is required to be done across all rows which are being imported.
     * To do pre-create activities on a per entity basis you can simply write the code when implemeting importCreate() method.
     *
     * Optional To Override
     *
     * @param array $entities
     */
    protected function beforeImport($entities)
    {

    }

    /**
     * Takes an array of entities representing all rows in the CSV as the argument. Each entity passed to this method is actually an instance of the entity class.
     * You can optionally override this method to do any processing that is required to be done across all rows which are being imported.
     * To do post-create activities on a per entity basis you can simply write the code when implemeting importCreate() method.
     *
     * Optional To Override
     *
     * @param array $entities
     */
    protected function afterImport($entities)
    {

    }

    /**
     * Action method linked to the GET <entityname>/import route.
     * Simply renders the first step which allows one to upload hte CSV file & see the import instructions.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function import()
    {
        return view($this->importView(), [
            'crud' => $this->crud,
            'instructions' => $this->importInstructions(),
        ]);
    }

    /**
     * Action method linked to the GET <entityname>/importFormatDownload route.
     * Generates a CSV and streams the response to the browser. The CSV is generated based on cofiguration provided
     * in the setup() method of the entity controller.
     *
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function importFormatDownload()
    {
        // figure out the importable fields.
        $importFields = $this->getImportableFields();

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=" . $this->importSampleFilename(),
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = [];
        foreach ($importFields as $idx_1 => $importField) {
            $columns[] = $importField['label'];
        }

        $callback = function () use ($columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    /**
     * Action method linked to the POST <entityname>/importParse route.
     * This method consumes the file upload, saves it to the CsvData entity which stores the uploaded file in interim storage.
     * This method then renders a view which allows the user to do the mapping between the csv header fields & the field names
     * as specified in the setup() method of the CrudController.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function importParse(Request $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));

        $csvDataFile = CsvData::create([
            'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
            'csv_data' => json_encode(mb_convert_encoding($data, 'UTF-8', 'auto'))
        ]);

        $csvData = array_slice($data, 0, 10);

        return view($this->importParseView(), [
            'import_fields' => $this->getImportableFields(),
            'csv_data' => $csvData,
            'csv_header' => $csvData[0],
            'csv_data_file' => $csvDataFile,
            'crud' => $this->crud,
        ]);
    }

    /**
     *
     * Action method linked to the POST <entityname>/importProcess route.
     * Here is where the bulk of the logic of importing the data is written. This method uses the mapping provided in the
     * previous step and uses the CSV data stored earlier in the CsvData entity.
     * It then runs all resolutions / validations as configured.
     * Finally the resolved entities are passed to the importCreate() method. The lifecycle methods are also invoked
     * while running this method.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function importProcess(Request $request)
    {
        // figure out the importable fields.
        $importFields = $this->getImportableFields();

        // load the data stored in the database.
        $requestFields = $request->fields;
        $data = CsvData::find($request->csv_data_file_id);
        $csv_data = json_decode($data->csv_data, true);

        $entities = [];
        foreach ($csv_data as $idx_1 => $row) {
            if ($idx_1 == 0) {
                continue;
            }
            $entity = [];

            foreach ($importFields as $idx_2 => $importField) {
                $t = array_search($importField['name'], $requestFields);
                if ($t !== false) {
                    $entity[$importField['name']] = isset($row[$t]) ? $row[$t] : null;
                }
            }

            $entities[] = $entity;
        }

        // resolve all the foreign keys.
        foreach ($entities as $idx_1 => &$entity) {
            foreach ($importFields as $idx_2 => $importField) {
                if (isset($importField['import_resolver'])) {
                    $importField['import_resolver']($entity);
                }
            }
        }

        // run validations.
        $errors = [];
        foreach ($entities as $idx => &$entity) {
            $rules = $this->importValidationRules();
            $messages = $this->importValidationMessages();
            $validator = Validator::make($entity, $rules, $messages);
            if ($validator->fails()) {
                $errors[] = [
                    'row_number' => $idx + 1,
                    'errors' => $validator->errors()->all()
                ];
            }
        }

        // create the user appointments.
        $entityObjects = [];
        $this->beforeImport($entities);
        if (empty($errors)) {
            foreach ($entities as $idx => &$entity) {
                $entityObjects[] = $this->importCreate($entity);
            }
        }
        $this->afterImport($entityObjects);

        return view($this->importProcessView(), [
            'crud' => $this->crud,
            'errors' => $errors,
        ]);
    }

    /**
     *
     * Used internally to fetch a list of importable fields. This method uses the CrudPanel metadata and infers
     * importable fields based on the "importable => true" configuration attribute.
     *
     * @return array
     */
    private function getImportableFields()
    {
        $createFields = $this->crud->getFields('create');
        $importFields = [];
        foreach ($createFields as $idx_1 => $createField) {
            if (isset($createField['importable']) && $createField['importable']) {
                if (isset($createField['importable_fields'])) {
                    foreach ($createField['importable_fields'] as $idx_2 => $nested) {
                        $importFields[] = $nested;
                    }
                } else {
                    $importFields[] = $createField;
                }
            }
        }

        return $importFields;
    }

}
