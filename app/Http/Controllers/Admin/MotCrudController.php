<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MotRequest;
use App\Models\Syllabe;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;

/**
 * Class MotCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MotCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as TraitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

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
        CRUD::column('mot1')->label('Syllabe 1');
        /*
        CRUD::column('mot2')->label('Syllabe 2');
        CRUD::column('mot3')->label('Syllabe 3');
        CRUD::column('mot4')->label('Syllabe 4');
        CRUD::column('mot5')->label('Syllabe 5');
        CRUD::column('mot6')->label('Syllabe 6');
        //CRUD::column('enMacusi')->label('Macusi');
        //CRUD::column('dateAjout')->label("Date d'ajout");
        CRUD::column('explication');
        */
        CRUD::column('trads');
        CRUD::addColumn([
            'name' => 'types',
            'label' => 'types',
            'type' => 'select_multiple',
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

        for ($i = 1; $i < 7; $i++) {
            CRUD::addField([
                'name' => 'mot'.$i,
                'label' => 'Mot ' . $i,
                'type' => 'select',
                'model' => 'App\Models\Syllabe',
                'attribute' => 'syllabe'

            ]);
        }

        CRUD::field('enMacusi')->type('hidden');
        CRUD::field('dateAjout')->type('hidden')->default(Carbon::now());
        CRUD::field('explication');
        CRUD::addField([
            'label' => 'Types',
            'type' => 'select_multiple',
            'name' => 'types',
        ]);
        CRUD::field('trads')->type('hidden');

        foreach (config('custom.available_languages') as $language){
            CRUD::addField([
                'name' => $language,
                'label' => 'Trad ' . $language,
                'type' => 'text'
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
        $trads = json_encode($tradsArray);
        $this->crud->getRequest()['trads'] = $trads;

        $macusi = '';
        for ($i = 1; $i < 7; $i++) {
            $syllabe = Syllabe::find($this->crud->getRequest()['mot'.$i])->syllabe;
            $macusi .=  $syllabe;
            $this->crud->getRequest()['mot'.$i] = $syllabe;
        }

        $this->crud->getRequest()['enMacusi'] = $macusi;
        //dd($this->crud->getRequest());

        $response = $this->TraitStore();
        return $response;
    }

}
