<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
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
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');

        $user = backpack_user();

        if (!$user->hasRole('Super Admin')) {
            $this->crud->denyAccess('delete');
            $this->crud->denyAccess('update');
            $this->crud->denyAccess('show');
            $this->crud->denyAccess('list');
        }
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'id',
                'label' => 'Id',
                'type'  => 'int',
                'prefix' => '#'
            ],
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [ // n-n relationship (with pivot table)
                'label'     => trans('backpack::permissionmanager.roles'), // Table column heading
                'type'      => 'select_multiple',
                'name'      => 'roles', // the method that defines the relationship in your Model
                'entity'    => 'roles', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => config('permission.models.role'), // foreign key model
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => trans('backpack::permissionmanager.password'),
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => trans('backpack::permissionmanager.password_confirmation'),
                'type'  => 'password',
            ],
            [
                'label'             => 'Roles',
                'field_unique_name' => 'user_role_permission',
                'type'              => 'checklist',
                'name'              => 'roles',
                'entity'            => 'roles',
                'attribute'         => 'name', // the column that contains the role name in the roles table
                'model'             => config('permission.models.role'), // the model that contains the roles
                'pivot'             => true, // on create&update, do you need to add/delete pivot table entries?
                'number_columns'    => 3, // can be 1, 2, 3, 4, 6
            ],



        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [
                'label'             => 'Roles',
                'field_unique_name' => 'user_role_permission',
                'type'              => 'checklist',
                'name'              => 'roles',
                'entity'            => 'roles',
                'attribute'         => 'name', // the column that contains the role name in the roles table
                'model'             => config('permission.models.role'), // the model that contains the roles
                'pivot'             => true, // on create&update, do you need to add/delete pivot table entries?
                'number_columns'    => 3, // can be 1, 2, 3, 4, 6
            ],



        ]);
    }

    public function store(UserRequest $request)
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitStore();
    }

    public function update(UserRequest $request)
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitUpdate();
    }

    protected function handlePasswordInput($request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');
        $request->request->remove('roles_show');
        $request->request->remove('permissions_show');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }
}
