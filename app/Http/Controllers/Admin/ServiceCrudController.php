<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('service', 'services');

        $user = backpack_user();
        if (!$user->hasRole('Super Admin')) {
            $this->crud->denyAccess('delete');
        }
    }

    protected function setupListOperation()
    {
        CRUD::column('name');
    }

    protected function setupShowOperation()
    {
        CRUD::column('name');
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }

    protected function setupCreateOperation()
    {
        CRUD::field('name');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function store(ServiceRequest $request)
    {
        return $this->traitStore();
    }

    protected function update(ServiceRequest $request)
    {
        return $this->traitUpdate();
    }
}
