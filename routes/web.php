<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::match(['put','patch'],'profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


    Route::resource('tasks', \App\Http\Controllers\TaskController::class);

    Route::get('/', [ProjectController::class, 'index']);
    Route::resource('projects', ProjectController::class);

});

require __DIR__.'/auth.php';
