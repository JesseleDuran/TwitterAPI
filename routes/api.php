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



Route::group(['middleware' => 'cors'], function()
{
  Route::resource('tweet', 'TweetController'); // /tweet PUT, PATCH, POST, GET = Resource
  Route::resource('user', 'UserController');

  Route::get('/aumentarFav/{tweet}', 'TweetController@aumentarFav');
  Route::get('/aumentarRt/{tweet}', 'TweetController@aumentarRt');


  Route::get('/mostrarTimeline', 'TweetController@indexTimeline');

  Route::get('/mostrarMisTweets', 'TweetController@indexProfile');
});
