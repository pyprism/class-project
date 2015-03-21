<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UserController@index');
Route::post('/', 'UserController@login');

Route::group(array('before'=>'auth'), function(){
    Route::get('/auth_member/{email}/dashboard', 'MemberController@index');
    Route::get('/auth_member/allocation', 'MemberController@allocation');
   // Route::post('/auth_member/allocation/save', 'MemberController@allocation_save');
});