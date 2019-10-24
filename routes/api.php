<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', 'UserController')->except('create','edit','update','show');
Route::post('user/unique', 'UserController@uniqueUsername')->name('user.uniqueUsername');
Route::post('user/authenticate', 'UserController@authenticate')->name('user.authenticate');
Route::post('user/changePassword', 'UserController@changePassword')->name('user.changePassword');

Route::resource('company', 'CompanyController')->except('create','edit');

Route::resource('route', 'RouteController');
Route::resource('point', 'PointController');
//Route::resource('company_log', 'CompanyLogController');
Route::get('company_log/new/{id_user}/{id_company}', 'CompanyLogController@newCompany')->name('company_log.new');
Route::get('company_log/update/{id_user}/{id_company}', 'CompanyLogController@updateCompany')->name('company_log.update');
Route::get('company_log/delete/{id_user}/{id_company}', 'CompanyLogController@deleteCompany')->name('company_log.delete');

Route::resource('route_log', 'RouteLogController');