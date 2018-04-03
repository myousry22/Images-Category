<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::group(['prefix'=>'category'],function(){

    Route::apiResource('{category}/images','imageController');
    });
    
*/



//list all categories
Route::get('categories','CategoryController@index');
//one category
Route::get('category/{id}','CategoryController@show');
//add new category
Route::post('category','CategoryController@store');
//edit category
Route::put('category','CategoryController@store');
//delete category
Route::delete('category/{id}','CategoryController@destroy');
/*
//Images
//list all categories
Route::get('images','imageController@index');
//one category
Route::get('category/{id}/image','CategoryController@show');
//add new category
Route::post('category','CategoryController@store');
//edit category
Route::put('category','CategoryController@store');
//delete category
Route::delete('category/{id}','CategoryController@destroy');
*/

