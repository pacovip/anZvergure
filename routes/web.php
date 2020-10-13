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

       Route::get('/about-us', 'WebController@aboutus')->name('about-us');
       Route::get('/consultant', 'WebController@consultant')->name('consultant');
       Route::get('/staff', 'WebController@staff')->name('staff');
       Route::get('/policy', 'WebController@policy')->name('policy');

       Route::get('/private-sector', 'WebController@privatesector')->name('private-sector');
       Route::get('/public-sector', 'WebController@publicsector')->name('public-sector');

       Route::get('/offer-administrative', 'WebController@offeradministrative')->name('offer-administrative');
       Route::get('/offer-management', 'WebController@offermanagement')->name('offer-management');
       Route::get('/offer-project', 'WebController@offerproject')->name('offer-project');
       Route::get('/offer-hr', 'WebController@offerhr')->name('offer-hr');
       Route::get('/offer-payroll', 'WebController@offerpayroll')->name('offer-payroll');


       Route::get('/contact', 'WebController@contact')->name('contact');
});
