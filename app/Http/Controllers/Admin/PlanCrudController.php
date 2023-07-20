<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PlanRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PlanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PlanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Plan::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/plan');
        CRUD::setEntityNameStrings('plan', 'plans');

        $user = backpack_user();
        if (!$user->hasRole('Super Admin')) {
            $this->crud->denyAccess('delete');
        }
    }

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
        CRUD::column('description');
        CRUD::column('price')->suffix(' dh');
        CRUD::column('periode')->suffix(' month');;
    }

    protected function setupCreateOperation()
    {
        CRUD::field('name');
        CRUD::field([ 
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
        ]);
        CRUD::field('description');
        CRUD::field('price');
        CRUD::field('periode');
    }

    protected function setupUpdateOperation()
    {
        CRUD::field('name');
        CRUD::field('image');
        CRUD::field('description');
        CRUD::field('price');
        CRUD::field('periode');
    }
}
