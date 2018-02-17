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

Route::get('/', function () {
    return view('auth.login');
});

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::get('/dashboard', function (){
//    return view("dashboard");
//})->name('dashboard');

Route::get('/dashboard', 'TrainDetailsController@landing')->name('dashboard');
//merge
Route::get('/show1', 'Test@index')->name('show1');
Route::get('/home', 'Test@create')->name('view');
Route::post('/home', 'Test@store')->name('insert');

Route::get('/sroute/{t_no}', 'Test@show')->name('sroute');
//merge
Route::get('/update/{t_no}', 'Test@edit')->name('edit');
Route::post('/update/{t_no}', 'Test@update')->name('update');

Route::get ('/test', 'Test@test')->name('test');

Route::get ('/show', 'TrainDetailsController@index')->name('show');
Route::get ('/home', 'TrainDetailsController@create')->name('view');
Route::post ('/home', 'TrainDetailsController@store')->name('insert');

Route::get ('/home/search', 'TrainDetailsController@search')->name('search');

//Route::post ('/home', 'TrainRouteController@store')->name('rinsert');

//Super Admin side pannel connection

Route::get ('/stationAdd','MasterStationEntryController@index')->name('addStationIndex')->middleware('userCheck');
Route::get ('/trainAdd','MasterTrainTypeController@index')->name('addTrainIndex')->middleware('userCheck');
Route::get ('/classAdd','MasterTrainClassController@index')->name('addClassIndex')->middleware('userCheck');

Route::post('/stationAdd','MasterStationEntryController@store')->name('addStationSub')->middleware('userCheck');
Route::post ('/trainAdd','MasterTrainTypeController@store')->name('addTypeSub')->middleware('userCheck');
Route::post ('/classAdd','MasterTrainClassController@store')->name('addClassSub')->middleware('userCheck');

//side pannel(Super_Admin)

Route::get('/stationList','MasterStationEntryController@show')->name('viewStations')->middleware('userCheck');
Route::get('/classList','MasterTrainClassController@show')->name('viewClasses')->middleware('userCheck');
Route::get('/trainTypeList','MasterTrainTypeController@show')->name('viewTrainTypes')->middleware('userCheck');
Route::get('/trainList','TrainDetailsController@show')->name('viewTrains')->middleware('userCheck');

//autocomplete
Route::get('/autocomplete', array('as' => 'autocomplete', 'uses'=>'Test@autocomplete')); //Instead of Theme your Controller name
Route::get('/fairautocomplete', array('as' => 'fairautocomplete', 'uses'=>'Test@fairautocomplete')); //Instead of Theme your Controller name