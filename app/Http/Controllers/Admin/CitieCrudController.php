<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CitieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CitieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CitieCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Citie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/citie');
        CRUD::setEntityNameStrings('citie', 'cities');

        $user = backpack_user();
        if (!$user->hasRole('Super Admin')) {
            $this->crud->denyAccess('delete');
        }
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('image')
            ->type('image')
            ->value(function ($value) {

                if (filter_var($value->image, FILTER_VALIDATE_URL)) {
                    return $value->image;
                }

                $imageUrl = '/storage/' . $value->image;
                return $imageUrl;
            })
            ->sanitize(false);
        CRUD::column('societies');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }
    protected function setupShowOperation()
    {
        // Displaying an image column

        CRUD::column('name');
        CRUD::column('image')
            ->type('image')
            ->value(function ($value) {

                if (filter_var($value->image, FILTER_VALIDATE_URL)) {
                    return $value->image;
                }

                $imageUrl = '/storage/' . $value->image;
                return $imageUrl;
            })
            ->sanitize(false);
        CRUD::column('societies');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('name');
        CRUD::field([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
        ]);


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
        CRUD::field('name');
        CRUD::field([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
        ]);
    }
}
