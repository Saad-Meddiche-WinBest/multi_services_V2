<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RoleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RoleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        $this->crud->setModel($role_model);
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.role'), trans('backpack::permissionmanager.roles'));
        $this->crud->setRoute(backpack_url('role'));

        // $user = backpack_user();

        // if (!$user->hasRole('Super Admin')) {
        //     $this->crud->denyAccess('delete');
        //     $this->crud->denyAccess('update');
        //     $this->crud->denyAccess('show');
        //     $this->crud->denyAccess('list');
        // }
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name'  => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type'  => 'text',
        ]);

        $this->crud->query->withCount('users');

        $this->crud->addColumn([
            'label'     => trans('backpack::permissionmanager.users'),
            'type'      => 'text',
            'name'      => 'users_count',
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('user?role=' . $entry->getKey());
                },
            ],
            'suffix'    => ' ' . strtolower(trans('backpack::permissionmanager.users')),
        ]);

        if (config('backpack.permissionmanager.multiple_guards')) {
            $this->crud->addColumn([
                'name'  => 'guard_name',
                'label' => trans('backpack::permissionmanager.guard_type'),
                'type'  => 'text',
            ]);
        }
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField([
            'name'  => 'name',
            'label' => 'Name',
            'type'  => 'text',
        ]);
    }


    protected function setupUpdateOperation()
    {
        $this->crud->addField([
            'name'  => 'name',
            'label' => 'Name',
            'type'  => 'text',
        ]);
    }
}
