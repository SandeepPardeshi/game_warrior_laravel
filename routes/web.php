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

/**
 * Route to get to the home page of Game Warrior site
 */
Route::get('/', function () {
    return view('gamehome');
});

/**
 * Route to get to the detailed view page
 */
Route::get('game/{game:slug}', 'GamesController@show');

/**
 * Route to get to the category based selection page
 */
Route::get('/category/{name}', 'GamesController@category');

/**
 * Route to get to the list view for primary tabel data
 */
Route::get('/game', 'GamesController@index');

/**
 * Route to get to the about page
 */
Route::get('/about', 'GamesController@about');

/**
 * Route to get to the Contacts page
 */
Route::get('/contact', 'GamesController@contact');

/**
 * Route for admin middleware
 */
Route::middleware(['admin'])->group(function(){

    /**
     * Route to view admin index
     */
    Route::get('/admin', 'Admin\AdminController@index');

    /**
     * Route to view list view of primary table on Admin's page
     */
    Route::get('/admin/gamerecords', 'Admin\AdminController@gamerecord');

    /**
     * Edit existing record
     */
    Route::get('/admin/gamerecords/editgame/{id}', 'Admin\AdminController@edit');

    /**
     * Create a new record
     */
    Route::get('/admin/gamerecords/creategame', 'Admin\AdminController@create');

    /**
     * Update existing record
     */
    Route::put('/admin/gamerecords/editgame/{id}', 'Admin\AdminController@update');

    /**
     * Saving a new record
     */
    Route::post('/admin/gamerecords/creategame', 'Admin\AdminController@store');

    /**
     * Delete an existing record
     */
    Route::delete('/admin/gamerecords/delete/{id}', 'Admin\AdminController@destroy');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
