<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('check-connect',function(){
    if(DB::connection()->getDatabaseName()){
        return "Yes! sussessfully connected DB: " . DB::connection()->getDatabaseName();
    }else{
        return 'Connection Fales !!';
    }
});


Route::get('check-model','ProfileController@getIndex');

Route::controller('admin/index','Admins\DashboardController');