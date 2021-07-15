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

/*Route::namespace('Frontend')->group(function(){
    Route::get('frontend','FrontendController@showfrontend');
 });*/




 // prefix
 Route::group(['prefix'=>'test'],function(){
    Route::get('/',function(){
       return '22222222222222222222';
      
    });
 });

 /// namespace
 Route::group(['namespace'=>'Frontend'],function(){
    Route::get('frontend','FrontendController@showfrontend');
 });

 // ********************* middleware **********************
 Route::group(['namespace'=>'Frontend'],function(){
 Route::get('testmiddleware','FrontendController@showfrontend');
 Route::get('testmiddleware2','FrontendController@showfrontend2');
 Route::get('testmiddleware3','FrontendController@showfrontend3');

});
 /*Route::group(['middleware'=>'auth'],function(){
    Route::get('testmidllewre','FrontendController@showfrontend');
 });*/

 Route::get('check',function(){
     return 'middlware';
 })->middleware('auth');




 
 

   
