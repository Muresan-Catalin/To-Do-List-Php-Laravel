<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TaskController;

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

Route::get('/', 'App\Http\Controllers\TaskController@index'); //afisare lista sarcini pe pagina de start
#Route::get('/', [TaskController::class, 'index']);
Route::resource('tasks', 'App\Http\Controllers\TaskController'); // Ruta de resurse va genera CRUD URI

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
