<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//------------------------- panel routes
Route::get('/panel', function () {
    $page_name = 'panel';
    return view('admin.index', compact('page_name'));
});

//------------------------ inventory panel routes
Route::get('panel/inventory', 'Panel\InventoryController@index');
Route::get('panel/inventory/create', 'Panel\InventoryController@create');
Route::post('panel/inventory/create', 'Panel\InventoryController@insert');
Route::get('panel/inventory/show/{id}', 'Panel\InventoryController@show');
Route::get('panel/inventory/edit/{id}', 'Panel\InventoryController@edit');
Route::post('panel/inventory/edit/{id}', 'Panel\InventoryController@update');
Route::post('panel/inventory/delete/{id}', 'Panel\InventoryController@delete');
//------------------ inventory view routes
Route::get('/enventory', 'Site\InventoryController@index');
Route::post('/enventory', 'Site\InventoryController@saveOrder');
Route::get('/enventory/rfq/{id}', 'Site\InventoryController@order');

//-------------------------- orders panel routes
Route::get('panel/orders', 'Panel\OrdersController@index');
Route::get('panel/orders/show/{id}', 'Panel\OrdersController@show');
Route::post('panel/orders/delete/{id}', 'Panel\OrdersController@delete');
//------------------------ Notes Views
Route::get('panel/notes', 'Panel\NoteController@index');
Route::post('panel/notes', 'Panel\NoteController@save');
Route::get('panel/notes/show/{id}', 'Panel\NoteController@show');
Route::post('panel/notes/delete/{id}', 'Panel\NoteController@delete');

//------------------------- view routes

Route::get('/', function () {
    return view('site.index');
});

Route::get('/about-us', function () {
    return view('site.about');
});

Route::get('/org', function () {
    return view('site.org');
});

Route::get('/activities', function () {
    return view('site.activities');
});


Route::get('/contact-us', function () {
    return view('site.contact');
});

