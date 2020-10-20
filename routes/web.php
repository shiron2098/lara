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
//route::get('/home','UsersController@index');
//route::get('/home/{id}','UsersController@show')->name('articleShow');

route::get('/index','Test2sController@index');
route::get('/show/{task}','Test2sController@show');
route::get('/users','PaginationController@TableUSers');

/*
Route::get('/about', function () {
   // $tasks = DB::table('test2s')->get();
    $tasks = App\test2s::complete();
    return view('about',compact('tasks'));
});
Route::get('/home/{tasks}', function ($id) {
    $task = App\test2s::find($id);
    return view('/home',compact('task'));
});*/
//

//Route::get('/about', function () {
//    return view('about');
//});
//Route::get('/home', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('send','MailController@send');

