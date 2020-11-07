<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard');
    Route::get('/users', 'Admin\UserController@getUsers');

    // Modulo de productos
    Route::get('/products', 'Admin\ProductController@getHome');
    Route::get('/products/add', 'Admin\ProductController@getProductAdd');

    //Categorias
    Route::get('/categories/{module}', 'Admin\CategoriesController@getHome');
    Route::post('/categories/add', 'Admin\CategoriesController@postCategoryAdd');
    Route::get('/categories/{id}/edit', 'Admin\CategoriesController@getCategoryEdit');
    Route::post('/categories/{id}/edit', 'Admin\CategoriesController@postCategoryEdit');
    Route::get('/categories/{id}/delete', 'Admin\CategoriesController@getCategoryDelete');
});
