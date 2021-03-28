<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/', 'DashboardController')->name('dashboard.index');
});


Route::prefix('/cliente')->group(function () {
    Route::get('/', 'ClienteController@index')->name('cliente.index');
    Route::get('create', 'ClienteController@create')->name('cliente.create');
    Route::post('/store', 'ClienteController@store')->name('cliente.store');
    Route::get('/', 'ClienteController@index')->name('cliente.index');
    Route::get('/', 'ClienteController@index')->name('cliente.index');
});
Route::prefix('/categoria')->group(function () {
    Route::get('/', 'CategoriaController@index')->name("categoria.index");
    Route::get('/create', 'CategoriaController@create')->name("categoria.create");
    Route::post('/store', 'CategoriaController@store')->name('categoria.store');
    Route::get('/edit/{id}', 'CategoriaController@edit')->name('categoria.edit');
    Route::put('/update/{id}', 'CategoriaController@update')->name('categoria.update');
    Route::delete('/delete/{id}', 'CategoriaController@delete')->name('categoria.delete');
});


Route::prefix('/produto')->group(function () {
    Route::get('/', 'ProdutoController@index')->name('produto.index');
    Route::get('create', 'ProdutoController@create')->name('produto.create');
    Route::post('store', 'ProdutoController@store')->name('produto.store');

});
