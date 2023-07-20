<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\PremiumRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PremiumCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PremiumCrudController extends CrudController
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

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Premium::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/premium');
        CRUD::setEntityNameStrings('premium', 'premia');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('societie');
        CRUD::column('plan');
        CRUD::column('consumed_at')->type('date');
        CRUD::column('expire_at')->type('date');
    }

    protected function setupShowOperation()
    {

        CRUD::column('societie');
        CRUD::column('plan');
        CRUD::column('consumed_at')->type('date');
        CRUD::column('expire_at')->type('date');
        CRUD::column('created_at');
        CRUD::column('updated_at');

    }


    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('plan_id')->type('select')
            ->label('Plan')
            ->entity('plan');

        CRUD::field('societie_id')->type('select')
            ->label('Societie')
            ->entity('societie');

        CRUD::field('consumed_at')->type('date');
        CRUD::field('expire_at')->type('hidden');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::field('plan_id')->type('select')
            ->label('Plan')
            ->entity('plan');

        CRUD::field('societie_id')->type('select')
            ->label('Societie')
            ->entity('societie');

        CRUD::field('consumed_at')->type('date');
        CRUD::field('expire_at')->type('hidden');
    }

    protected function store(Request $request)
    {

        $planId = $request->input('plan_id');
        $consumedAt = $request->input('consumed_at');

        $plan = Plan::find($planId);

        $periodInMonths = $plan->periode;
        $expireAt = Carbon::parse($consumedAt)->addMonths($periodInMonths);
        $request['expire_at'] = $expireAt;

        return $this->traitStore();
    }

    protected function update(Request $request)
    {

        $planId = $request->input('plan_id');
        $consumedAt = $request->input('consumed_at');

        $plan = Plan::find($planId);

        $periodInMonths = $plan->periode;
        $expireAt = Carbon::parse($consumedAt)->addMonths($periodInMonths);
        $request['expire_at'] = $expireAt;

        return $this->traitUpdate();
    }
}
