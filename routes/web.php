<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;


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

Route::get('/', [PagesController::class,'index']);

Route::group(['prefix' => 'pages'],function(){
    Route::get('about', [PagesController::class, 'about']);
    Route::get('policy', [PagesController::class, 'policy']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'article', ],function(){

    Route::resource('articles',ArticlesController::class);
});
//douala route
Route::post('credentials', [LoginController::class, 'loginRedirect'])->name('douala');

Route::group(['prefix' => 'admin'], function(){
    
    Route::get('dashboard', [AdminsController::class, 'index'])->name('dashboard');
});

