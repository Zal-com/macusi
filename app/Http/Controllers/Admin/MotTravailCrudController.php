<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MotTravailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MotTravailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MotTravailCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
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
        CRUD::setModel(\App\Models\MotTravail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/mot-travail');
        CRUD::setEntityNameStrings('mot travail', 'mot travails');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('mot1_sug')->label('Mot 1');
        CRUD::column('mot2_sug')->label('Mot 2');
        CRUD::column('mot3_sug')->label('Mot 3');
        CRUD::column('mot4_sug')->label('Mot 4');
        CRUD::column('mot5_sug')->label('Mot 5');
        CRUD::column('mot6_sug')->label('Mot 5');
        CRUD::column('enMacusi_sug')->label('Macusi');
        CRUD::column('trads_sug')->label('Traductions');
        $this->crud->addColumn([
            'name' => 'votes',
            'label' => 'Votes',
            'type'=> 'model_function',
            'function_name' => 'getVotesString'
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
        CRUD::setValidation(MotTravailRequest::class);

        CRUD::field('mot1_sug');
        CRUD::field('mot2_sug');
        CRUD::field('mot3_sug');
        CRUD::field('mot4_sug');
        CRUD::field('mot5_sug');
        CRUD::field('mot6_sug');
        CRUD::field('enMacusi_sug');
        CRUD::field('dateAjout_sug');
        CRUD::field('explication_sug');
        CRUD::field('trads_sug');

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
}
