<?php
use App\Photo;
use App\Post;
use App\Tag;
use App\User;
use App\Role;
use App\Country;
use App\Video;
use Carbon\Carbon;
use App\Article;
use App\Http\Requests;
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

Route::get('articles','ArticleController@index');
Route::get('articles/{article}','ArticleController@show');
Route::post('articles','ArticleController@store');
Route::put('articles/{article}','ArticleController@update');
//Route::delete('articles{article}','ArticleController@delete');
