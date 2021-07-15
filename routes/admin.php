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

Route::namespace('Admin')->group(function(){
    Route::get('admin','AdminController@showformadmin');
 });

Route::namespace('Personal')->group(function(){
    Route::get('personals','PersonalController@showpersonal');
    Route::get('conger','PersonalController@showconger'); 
    Route::get('maladie','PersonalController@showmaladie');
});

Route::namespace('Salary')->group(function(){
    Route::get('salaries','SalaryController@getsalary');
    Route::get('IEP','SalaryController@getIEP');
    Route::get('SB','SalaryController@getSB');
});

 
 

   
