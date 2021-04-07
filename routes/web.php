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

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Laravel 8 needs the full namespace\controller.php
Route::get('test/{slug}', 'App\Http\Controllers\Controller@show');
Route::get('review', 'App\Http\Controllers\Controller@create');
Route::get('projects', 'App\Http\Controllers\ProjectsController@create');

Route::post('/user', 'App\Http\Controllers\Controller@create');
Route::post('/user', 'App\Http\Controllers\Controller@store');
