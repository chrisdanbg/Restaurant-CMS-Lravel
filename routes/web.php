<?php

// HOME GET Request
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::resource('recipes', 'RecipesController');

// NAVBAR GET Requests
Route::get('/menu', 'MenuController@index')->name('menu');

// Get Requests For Admin Panel
// TODO : Get It Behind Authorization
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/homepage', 'AdminController@getSettings')->name('adminHomepage');
Route::get('/admin/menu', 'AdminController@getMenu')->name('adminMenu');

Route::get('/admin/category', 'AdminController@createCategory')->name('adminCreateCategory');

// GET Requests Admin Product
Route::get('/admin/create', 'AdminController@createProduct')->name('adminCreate');
Route::get('/admin/product/edit/{id}', 'AdminController@editProduct')->name('adminEditProduct');
Route::get('/admin/product/delete/{id}', 'AdminController@deleteProduct')->name('adminDeleteProduct');

// Admin POST REQUESTS

    // Create Product
    Route::post('/admin/create/product', [
        'uses' => 'AdminController@createNewProduct',
        'as' => 'admin.createNew'
    ]);

    // Edit Product
    Route::post('/admin/edit/product/{id}', [
        'uses' => 'AdminController@updateProduct',
        'as' => 'admin.EditProduct'
    ]);
    
    // Upload Product Photo
    Route::post('upload', 'AdminController@uploadProductPhoto');

    // Create Category
    Route::post('/admin/create/category', [
        'uses' => 'AdminController@createNewCategory',
        'as' => 'admin.createNewCategory'
    ]);
    
    // Update Homepage Slider
    Route::post('/admin/homepage/slider' ,[
        'uses' => 'AdminController@updateSiteName',
        'as' => 'homepage.updateSlider'
    ]);

    // Update Homepage Quick Order Products
    Route::post('/admin/homepage/product1' ,[
        'uses' => 'AdminController@productOneUpdate',
        'as' => 'homepage.productOneUpdate'
    ]);

    Route::post('/admin/homepage/product2' ,[
        'uses' => 'AdminController@productTwoUpdate',
        'as' => 'homepage.productTwoUpdate'
    ]);

    Route::post('/admin/homepage/product3' ,[
        'uses' => 'AdminController@productThreeUpdate',
        'as' => 'homepage.productThreeUpdate'
    ]);
    // END Update Homepage Quick Order Products