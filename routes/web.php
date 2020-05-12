<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/accueil', 'AccueilController@create');

Route::get('/catalogue/{id?}', 'CatalogueController@index');

Route::get('/produit/{id}', 'ProduitController@show')->name('product.show');


Route::put('/modifier/edit/{id}', 'ProduitController@update');
Route::get('/produit/edit/{id}', 'ProduitController@edit');

Route::get('/creer/create', 'ProduitController@create')->name('product.create');
Route::post('/creer', 'ProduitController@store')->name('product.store');

Route::delete('produit/destroy/{id}', 'ProduitController@destroy');
