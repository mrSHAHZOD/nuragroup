<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Controllers\NewsController;
// use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;

use App\Models\News;
use App\Models\Team;
use App\Models\About;

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

//home
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'App\Http\Controllers\PagesController@index');
//Route::get('/news', 'App\Http\Controllers\PagesController@news');
//Route::get('/new/{id}', 'App\Http\Controllers\PagesController@new');




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('/a-panel', function() {
    return view('admin.layouts.home');
    });

    Route::resource('a-panel/news', NewsController::class);
    Route::resource('a-panel/teams', TeamController::class);
    Route::resource('a-panel/abouts', AboutController::class);
    Route::resource('a-panel/galleries', GalleryController::class);

});
