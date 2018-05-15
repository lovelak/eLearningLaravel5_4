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
Route::get('/pageDetail/{id}',function($id){

    $learning = App\Learning::where('id',$id)->first();

    return view('home.listDetail',compact('id','learning'));
});

Route::group(['prefix'=>'menu'],function(){
    Route::get('reference',function(){
            $menu = App\Menu::where('id',5)->first();
            return view('home.menu.show',compact('menu'));
    });

    Route::get('download',function(){
        $menu = App\Submenu::where('menu_id',4)->orderBy('id')->get();
        return view('home.menu.download',compact('menu'));
});

    Route::get('author/{id}',function($id){
        $menu = App\Submenu::where('id',$id)->first();
        return view('home.menu.author',compact('menu'));
});


});
Route::group(['prefix'=>'pages','middleware'=>'auth'],function() {

    //แบบทดสอบก่อนเรียน
    Route::get('/pretests', 'PagesController@pretests');
    //ตรวจคำตอบ
    Route::post('/answerPretests','PagesController@answerPretests');

    //แบบทดสอบหลังเรียน
    Route::get('posttests','PagesController@posttests');
    //ตรวจคำตอบ
    Route::post('/answerPosttests','PagesController@answerPosttests');

    //แบบทดสอบท้ายบทเรียน
    Route::get('tests/{id}','PagesController@tests');
     //ตรวจคำตอบ
    Route::post('/answerTests','PagesController@answerTests');

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
    Route::get('menu/listAuthor/{id}','MenuController@listAuthor');
    Route::get('menu/editAuthor/{id}/{menu_id}/edit','MenuController@editAuthor');
    Route::post('menu/save/','MenuController@save');
    Route::get('menu/del/{id}','MenuController@del');
    Route::patch('menu/editSave/{id}/edit','MenuController@editSave');
    
    //download
    Route::get('menu/listDownload/{id}','MenuController@listDownload');
    Route::get('menu/editDownload/{id}/{menu_id}/edit','MenuController@editDownload');



    


    //Pretest
    Route::resource('pretests','PretestsController');
    Route::get('pretests/destroy/{id}','PretestsController@destroy');

    //Posttest
    Route::resource('posttests','PosttestsController');
    Route::get('posttests/destroy/{id}','PosttestsController@destroy');

    //Unit
    Route::resource('units','UnitsController');
    Route::get('units/{id}/add','UnitsController@add');

    //Learning
    Route::resource('learnings','LearningsController');
    Route::get('learnings/destroy/{id}','LearningsController@destroy');

    //Tests
    Route::resource('tests','TestsController');
    Route::get('tests/show/{id}','TestsController@show');
    Route::get('tests/add/{id}','TestsController@add');
    Route::get('tests/destroy/{id}','TestsController@destroy');



});

//Git Fetch
//git merge // git pull