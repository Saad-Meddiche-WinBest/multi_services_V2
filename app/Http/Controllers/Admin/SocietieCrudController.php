<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SocietieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use GuzzleHttp\Psr7\Request;

/**
 * Class SocietieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SocietieCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Societie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/societie');
        CRUD::setEntityNameStrings('societie', 'societies');

        $user = backpack_user();
        if (!$user->hasRole('Super Admin')) {
            $this->crud->denyAccess('delete');
        }
    }

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


        CRUD::column('Categorie');
        CRUD::column('services');

        CRUD::column('tags');
        CRUD::column('description')->type('summernote');
        CRUD::column('fax');

        $this->crud->addButtonFromView('line', 'schedule', 'schedule', 'beginning');
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

        CRUD::column('Categorie');
        CRUD::column('services');

        CRUD::column('ice');
        CRUD::column('adress');
        CRUD::column('description')->type('summernote');

        CRUD::column('telephone');
        CRUD::column('fax');
        CRUD::column('web_link');

        CRUD::column('facebook');
        CRUD::column('instagram');
        CRUD::column('twitter');
        CRUD::column('linkdin');

        CRUD::column('coordinations');
        CRUD::column('email');
    }

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

        CRUD::field('facebook');
        CRUD::field('instagram');
        CRUD::field('twitter');
        CRUD::field('linkdin');

        CRUD::field('coordinations');
        CRUD::field('video');

        CRUD::field('email');



        CRUD::field('categorie_id')->type('select')
            ->label('Categorie')
            ->entity('Categorie');

        $this->crud->addField([
            'label' => 'Services (Press ctrl for multiple selection)',
            'type' => 'select_multiple',
            'name' => 'services',
            'entity' => 'services',
            'attribute' => 'name',
            'model' => "App\Models\Service",
        ]);

        $this->crud->addField([
            'label' => 'Cities (Press ctrl for multiple selection)',
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

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function store(SocietieRequest $request)
    {
        return $this->traitStore();
    }

    protected function update(SocietieRequest $request)
    {
        return $this->traitUpdate();
    }
}
