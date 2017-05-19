<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

function user_ins()
{
  return new App\User;
}
function question_ins()
{
  return new App\Question;
}

function answer_ins()
{
  return new App\Answer;
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/signup',function(){
    return user_ins()->signup();
});

Route::get('/api/login',function(){
    return user_ins()->login();
});

Route::get('/api/logout',function(){
    return user_ins()->logout();
});

Route::any('/api/question/add',function(){
    return question_ins()->add();
});

Route::any('/api/question/change',function(){
    return question_ins()->change();
});

Route::any('/api/question/read',function(){
    return question_ins()->read();
});

Route::any('/api/question/remove',function(){
    return question_ins()->remove();
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
