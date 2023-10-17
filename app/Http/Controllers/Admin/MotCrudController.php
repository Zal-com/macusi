<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MotRequest;
use App\Jobs\GenerateDico;
use App\Models\Mot;
use App\Models\Syllabe;
use App\Models\Type;
use App\Models\TypeMot;
use App\Providers\PDFDicoManager;
use App\Providers\TranslateTrait;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use BackpackImport\ImportOperation;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

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
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as TraitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation {
        destroy as traitDestroy;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ImportOperation;
    use TranslateTrait;

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

        CRUD::removeButton('delete');
        CRUD::removeButton('show');


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

        CRUD::addField([
            'label' => 'Type',
            'type' => 'select_multiple',
            'name' => 'types',
            'entity' => 'types',
            'model' => 'App\Models\Type',
            'attribute' => 'trads',
            'pivot' => true,
            'tab' => 'Type.s'
        ]);


        CRUD::field('trads')
            ->type('hidden');

        for ($i = 1; $i <= 6; $i++) {
            CRUD::field('mot' . $i)->type('hidden');
        }

        foreach (config('custom.available_languages') as $language => $value) {
            CRUD::addField([
                'name' => $language,
                'label' => $value,
                'type' => 'text',
                'tab' => 'Traductions'
            ]);
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

        //Determines the base language used
        foreach ($traductions as $key => $traduction){
            if ($traduction != ''){
                $base = $traduction;
                $baseLanguage = $key;
            }
        }

        $tradsArray = $this->translate($baseLanguage, $base);


        $trads = json_encode($tradsArray);
        $this->crud->getRequest()['trads'] = $trads;

        $macusi = $this->crud->getRequest()['enMacusi'];
        $macusi = str_split($macusi, 2);

        for ($i = 1; $i <= 6; $i++) {

            if (!array_key_exists($i - 1, $macusi)) {
                $this->crud->getRequest()['mot' . $i] = null;
            } else {
                $syllabe = Syllabe::where('syllabe', '=', $macusi[$i - 1])->first();
                $this->crud->getRequest()['mot' . $i] = $syllabe->syllabe;
            }

        }


        $response = $this->TraitStore();

        $id_mot = DB::getPdo()->lastInsertId();

        foreach ($this->crud->getRequest()['types'] as $type) {
            $insert = new TypeMot();
            $insert->id_mot = $id_mot;
            $insert->id_type = $type;

            $insert->save();
        }

        GenerateDico::dispatch();

        return $response;
    }

    public function update()
    {

        $tradsArray = [
            'FR' => $this->crud->getRequest()['FR'],
            'EN' => $this->crud->getRequest()['EN'],
            'DE' => $this->crud->getRequest()['DE'],
            'IT' => $this->crud->getRequest()['IT']
        ];

        //Determines the base language used
        foreach ($tradsArray as $key => $traduction){
            if ($traduction != ''){
                $base = $traduction;
                $baseLanguage = $key;
            }
        }

        $tradsArray = $this->translate($baseLanguage, $base);

        $trads = json_encode($tradsArray);
        $this->crud->getRequest()['trads'] = $trads;

        $macusi = $this->crud->getRequest()['enMacusi'];
        $macusi = str_split($macusi, 2);

        for ($i = 1; $i <= 6 ; $i++) {

            if(! array_key_exists($i-1, $macusi)){
                $this->crud->getRequest()['mot' . $i] = null;
            }
            else{
                $syllabe = Syllabe::where('syllabe', '=', $macusi[$i-1])->first();
                $this->crud->getRequest()['mot' . $i] = $syllabe->syllabe;
            }

        }

        $response = $this->TraitUpdate();

        GenerateDico::dispatch();

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

