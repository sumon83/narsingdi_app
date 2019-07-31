<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'PagesController@index');
<<<<<<< HEAD
//Route::get('/division', 'DivisionsController@index');
//Route::get('/district', 'DistrictController@index');
//Route::get('/upozilla', 'UpozillaController@index');
//Route::get('/union', 'UnionController@index');
//Route::get('/blogs', 'PagesController@blogs');
//Route::get('/contact_us', 'PagesController@contact_us');
//Route::get('/services', 'PagesController@services');
//Route::get('/login', 'RegistrationController@login');
=======
Route::get('/division', 'DivisionController@index');
Route::get('/district', 'DistrictController@index');
Route::get('/upozilla', 'UpozillaController@index');
Route::get('/union', 'UnionController@index');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'RegistrationController@login');
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
//Route::get('/sign_up', 'RegistrationController@create');
//Route::get('/services', 'PagesController@services');


//Route::post('/division', 'DivisionController@store');
//Route::post('/edit_division', 'DivisionController@edit');
//Route::get('/services', 'PagesController@services');

<<<<<<< HEAD
Route::resource('/division', 'DivisionsController');
Route::resource('/edit', 'DivisionsController');
=======
Route::resource('/division', 'DivisionController');
Route::resource('/edit', 'DivisionController');
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
Route::resource('/registrar', 'RegistrationController');
Route::resource('/create', 'RegistrationController');
