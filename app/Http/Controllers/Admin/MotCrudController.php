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
        CRUD::column('mot1');
        CRUD::column('mot2');
        CRUD::column('mot3');
        CRUD::column('mot4');
        CRUD::column('mot5');
        CRUD::column('mot6');
        CRUD::column('enMacusi');
        CRUD::column('dateAjout');
        CRUD::column('explication');
        CRUD::column('trads');

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
                'entity' => 'syllabe'.$i,
                'attribute' => 'syllabe'

            ]);
        }

        CRUD::field('enMacusi')->type('hidden');
        CRUD::field('dateAjout')->type('hidden')->default(Carbon::now());
        CRUD::field('explication');

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

            //TODO FIXME
        $this->crud->getRequest()['enMacusi'] = Syllabe::find($this->crud->getRequest()['mot1'])->syllabe.
                                                Syllabe::find($this->crud->getRequest()['mot2'])->syllabe.
                                                Syllabe::find($this->crud->getRequest()['mot3'])->syllabe.
                                                Syllabe::find($this->crud->getRequest()['mot4'])->syllabe.
                                                Syllabe::find($this->crud->getRequest()['mot5'])->syllabe.
                                                Syllabe::find($this->crud->getRequest()['mot6'])->syllabe.

        dd($this->crud->getRequest());

        $response = $this->TraitStore();
        return $response;
    }

}
