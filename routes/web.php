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

// Laravel 8 needs the full namespace\controller.php

Route::get('review', 'App\Http\Controllers\Controller@create');
Route::get('projects', 'App\Http\Controllers\ProjectsController@create');
Route::get('contact', 'App\Http\Controllers\ContactController@create');

Route::post('/review', 'App\Http\Controllers\Controller@create');
Route::post('/review', 'App\Http\Controllers\Controller@store');
Route::post('/send-message', 'App\Http\Controllers\ContactController@sendEmail')->name('contact.send');
