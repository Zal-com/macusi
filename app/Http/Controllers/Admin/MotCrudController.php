<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MotRequest;
use App\Models\Syllabe;
use App\Models\Type;
use App\Providers\PDFDicoManager;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use BackpackImport\ImportOperation;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

/**
 * Class MotCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MotCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as TraitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ImportOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Mot::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/mot');
        CRUD::setEntityNameStrings('mot', 'mots');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('enMacusi')->label('Mot');

        CRUD::addColumn([
            'name' => 'trads',
            'label' => 'Traduction',
            'type' => 'custom_json'
        ]);
        CRUD::addColumn([
            'name' => 'types',
            'label' => 'Types',
            'type' => 'custom_type',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MotRequest::class);

        CRUD::field('enMacusi')
            ->label('MaCuSi')
            ->validationRules('required|max:12')
            ->tab('Mot');

        CRUD::field('dateAjout')
            ->type('hidden')
            ->default(Carbon::now());

        CRUD::field('explication')
            ->tab('Mot');

        CRUD::field([
            'label' => 'Types',
            'type' => 'select_multiple',
            'name' => 'id',
            'entity' => 'types',
            'model' => 'App\Models\Type',
            'attribute' => 'trads'
        ])
            ->validationRules('required')
            ->tab('Type.s');

        CRUD::field('trads')
            ->type('hidden');

        foreach (config('custom.available_languages') as $language=>$value) {
            CRUD::field([
                'name' => $language,
                'label' => $value,
                'type' => 'text',
            ])
                ->tab('Traductions');
        }

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store()
    {
        $tradsArray = [
            'FR' => $this->crud->getRequest()['FR'],
            'EN' => $this->crud->getRequest()['EN'],
            'DE' => $this->crud->getRequest()['DE'],
            'IT' => $this->crud->getRequest()['IT']
        ];
        $trads = json_encode($tradsArray);
        $this->crud->getRequest()['trads'] = $trads;

        $macusi = '';
        for ($i = 1; $i < 7; $i++) {
            $syllabe = Syllabe::find($this->crud->getRequest()['mot' . $i])->syllabe;
            $macusi .= $syllabe;
            $this->crud->getRequest()['mot' . $i] = $syllabe;
        }

        $this->crud->getRequest()['enMacusi'] = $macusi;

        $response = $this->TraitStore();

        /*
        //Regénération du dictionnaire dans toutes les langues
        $pdm = new PDFDicoManager();

        foreach(config('custom.available_languages') as $language => $value){
            $pdm->createPDF($language);
        }
*/
        return $response;
    }

    public function importValidationRules()
    {
        return [
            'mot1' => 'required',
            'mot2' => 'required_if:mot3,!=,null',
            'mot3' => 'required_if:mot4,!=,null',
            'mot4' => 'required_if:mot5,!=,null',
            'mot5' => 'required_if:mot6,!=,null',
            'mot6' => 'nullable',
            'enMacusi' => 'required|max:12',
            'dateAjout' => 'nullable',
            'explication' => 'nullable',
            'trads' => 'required',
        ];
    }
}

