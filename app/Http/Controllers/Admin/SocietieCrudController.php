<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SocietieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SocietieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SocietieCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Societie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/societie');
        CRUD::setEntityNameStrings('societie', 'societies');

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

        CRUD::column('title');
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
        CRUD::column('ice');
        CRUD::column('adress');
        CRUD::column('telephone');
        CRUD::column('cities');
        CRUD::column('web_link');


        CRUD::column('demiCategorie');
        CRUD::column('tags');
        CRUD::column('description');
        CRUD::column('fax');
    }
    protected function setupShowOperation()
    {

        CRUD::column('title');
        CRUD::column('tags');
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
        CRUD::column('cities');

        CRUD::column('demiCategorie');

        CRUD::column('ice');
        CRUD::column('adress');
        CRUD::column('description')->type('summernote');

        CRUD::column('telephone');
        CRUD::column('fax');
        CRUD::column('web_link');
    }


    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {


        CRUD::field('title');
        CRUD::field('ice');
        CRUD::field('adress');
        CRUD::field('description')->type('summernote');


        CRUD::field([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
        ]);

        CRUD::field('telephone');
        CRUD::field('fax');
        CRUD::field('web_link');

        CRUD::field('demi_categorie_id')->type('select')
            ->label('Demi Categorie')
            ->entity('demiCategorie');

        $this->crud->addField([
            'label' => 'cities (Press ctrl for multiple selection)',
            'type' => 'select_multiple',
            'name' => 'cities',
            'entity' => 'cities',
            'attribute' => 'name',
            'model' => "App\Models\Citie",
        ]);

        $this->crud->addField([
            'label' => 'Tags (Press ctrl for multiple selection)',
            'type' => 'select_multiple',
            'name' => 'tags',
            'entity' => 'tags',
            'attribute' => 'name',
            'model' => "App\Models\Tag",
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::field('title');
        CRUD::field('ice');
        CRUD::field('adress');
        CRUD::field('description')->type('summernote');


        CRUD::field([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
        ]);

        CRUD::field('telephone');
        CRUD::field('fax');
        CRUD::field('web_link');

        CRUD::field('demi_categorie_id')->type('select')
            ->label('Demi Categorie')
            ->entity('demiCategorie');




        $this->crud->addField([
            'label' => 'cities',
            'type' => 'select_multiple',
            'name' => 'cities',
            'entity' => 'cities',
            'attribute' => 'name',
            'model' => "App\Models\Citie",
        ]);

        $this->crud->addField([
            'label' => 'Tags',
            'type' => 'select_multiple',
            'name' => 'tags',
            'entity' => 'tags',
            'attribute' => 'name',
            'model' => "App\Models\Tag",
        ]);
    }

    /**
     * Define what happens when the Delete operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-delete
     * @return void
     */
    protected function setupDeleteOperation()
    {
    }
}
