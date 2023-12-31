<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('societie', 'SocietieCrudController');
    Route::crud('demi-categorie', 'DemiCategorieCrudController');
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('citie', 'CitieCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('plan', 'PlanCrudController');
    Route::crud('premium', 'PremiumCrudController');
    Route::crud('service', 'ServiceCrudController');
}); // this should be the absolute last line of this file