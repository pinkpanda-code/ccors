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

Route::get('/home','main_controller@home'); //home page
Route::get('/book_now','main_controller@book_now'); //book now page
Route::post('/book_now','main_controller@to_view_result'); //to view result page

Route::get('/view_result/{dest_id}/{d_port}/{ship_id}','main_controller@view_result'); //view resultpage
Route::post('/view_result/{dest_id}/{d_port}/{ship_id}','main_controller@to_purchase');//to purchase page

Route::get('/purchase/{cr_id}/{ca_id}/{qty}','main_controller@purchase'); //view purchase page
Route::post('/purchase/{cr_id}/{ca_id}/{qty}','main_controller@purchase_save'); //view purchase page

Route::post('/search_cruise','main_controller@search_cruise'); //ajax for searching

Route::post('/add_compare','main_controller@add_compare'); //ajax for adding for compare
Route::get('/compare_list','main_controller@compare_list'); //compare page
Route::get('/remove_compare/{id}','main_controller@remove_compare'); //compare page

Route::get('/about','main_controller@about'); //home page
Route::get('/contact','main_controller@contact'); //contact page
Route::get('/faq','main_controller@faq'); //faq page
Route::get('/cruises','main_controller@cruises'); //cruises page

