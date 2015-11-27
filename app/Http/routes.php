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

/**
 * Authentication and Registration Controllers.
 */
Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
 *Admin controls.
 *
 * Require one to login.
 * 
 */
$router->group(['middleware' => 'auth', 'namespace' => 'Admin'], function ($router) {
    $router->resource('category', 'CategoryController');
    $router->resource('listing', 'ListingController');

});

/*
 * Home page routers
 */
Route::get('/', 'PageController@index');
Route::post('listing/search', ['as' => 'listing.search','uses' => 'PageController@search']);
Route::get('category/{name}/search', ['as' => 'category.searchbycode','uses' => 'PageController@searchCategory']);
Route::get('listing/{id}/search', ['as' => 'listing.searchbycode','uses' => 'PageController@show']);
