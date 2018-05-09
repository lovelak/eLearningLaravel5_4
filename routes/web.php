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
    return view('home.index');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin',function(){
    return view('admin.index');
});



//admin login
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    //เมนู เว็บ
    Route::resource('menu','MenuController');
    Route::get('menu/editAuthor/{id}/edit','MenuController@editAuthor');


    //Pretest
    Route::resource('pretests','PretestsController');

    //Posttest
    Route::resource('posttests','PosttestsController');

    //Unit
    Route::resource('units','UnitsController');
    Route::get('units/{id}/add','UnitsController@add');

    //Learning
    Route::resource('learnings','LearningsController');


    //Tests
    Route::resource('tests','TestsController');
    Route::get('tests/show/{id}','TestsController@show');
    Route::get('tests/add/{id}','TestsController@add');
    Route::get('tests/destroy/{id}','TestsController@destroy');



});