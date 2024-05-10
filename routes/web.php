<?php

use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;


Route::get('/lens', function () {
    \Inertia\Inertia::setRootView('lens::app');
    return inertia('Home');
});
