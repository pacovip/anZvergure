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

use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ],
    function() {
       //Auth routes
       Auth::routes();
       //Web routes
       Route::get('/', 'WebController@index')->name('home');
       Route::get('/home', 'WebController@index')->name('home');
       Route::get('/fields', 'WebController@fields')->name('fields');
       Route::get('/about-us', 'WebController@aboutus')->name('about-us');
       Route::get('/consultant', 'WebController@consultant')->name('consultant');
       Route::get('/staff', 'WebController@staff')->name('staff');
       Route::get('/policy', 'WebController@policy')->name('policy');
       Route::get('/contact', 'WebController@contact')->name('contact');
});
