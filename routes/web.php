<?php

use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;


Route::get('/lens', function () {
    $users = QueryBuilder::for(\Lens\models\Product::class)
        ->allowedFilters('name')
        ->get();

    \Inertia\Inertia::setRootView('lens::app');
    return inertia('Home');
});
