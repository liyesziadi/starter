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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('news','News\NewsController');
//Route::get('news','News\NewsController@index');


Route::namespace('landing')->group(function(){
    Route::get('landing','LandingController@showlanding');
    Route::get('about','LandingController@showabout');
 });

 Route::get('login',function(){

    $data=['Laravel','liyes','mostefa','hamani'];
    $data2=[];
    return view('welcome',compact('data','data2'))->with(['id'=>3,'name'=>'liyes']);
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');




Route::group(['prefix'=>'offers'],function(){
    Route::get('getoffers', 'Offers\OfferController@getoffers');
    Route::get('createoffer', 'Offers\OfferController@createoffer');
    Route::post('store', 'Offers\OfferController@store')->name('offers.store');
    });
Auth::routes();