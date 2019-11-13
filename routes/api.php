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

Route::resource('route', 'RouteController')->except('create','edit');
Route::get('route/by_company/{id_company}', 'RouteController@by_company')->name('route.by_company');
Route::get('route/by_destination/{id_distric}', 'RouteController@by_destination')->name('route.by_destination');

Route::post('route/many', 'RouteController@many_route')->name('route.many_route');

Route::resource('point', 'PointController')->except('create','edit','update');
//Route::resource('company_log', 'CompanyLogController');
Route::get('company_log/new/{id_user}/{id_company}', 'CompanyLogController@newCompany')->name('company_log.new');
Route::get('company_log/update/{id_user}/{id_company}', 'CompanyLogController@updateCompany')->name('company_log.update');
Route::get('company_log/delete/{id_user}/{id_company}', 'CompanyLogController@deleteCompany')->name('company_log.delete');

//Route::resource('route_log', 'RouteLogController');
Route::get('route_log/new/{id_user}/{id_route}', 'RouteLogController@newRoute')->name('route_log.new');
Route::get('route_log/update/{id_user}/{id_route}', 'RouteLogController@updateRoute')->name('route_log.update');
Route::get('route_log/delete/{id_user}/{id_route}', 'RouteLogController@deleteRoute')->name('route_log.delete');

Route::resource('province', 'ProvinceController')->except('create','store','show','edit','update','destroy');

Route::resource('canton', 'CantonController')->except('create','store','show','edit','update','destroy');
Route::get('canton/by_province/{id_province}', 'CantonController@index_by_province')->name('by_province.new');

Route::resource('distric', 'DistricController')->except('create','store','show','edit','update','destroy');
Route::get('distric/by_canton/{id_canton}', 'DistricController@index_by_canton')->name('by_canton.new');

Route::resource('new_place', 'New_placeController')->except('update','edit','create');