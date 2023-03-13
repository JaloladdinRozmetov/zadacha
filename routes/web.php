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

Route::get('/',[App\Http\Controllers\Controller::class,'index'])->name('home');
Route::post('login',[App\Http\Controllers\Controller::class,'login'])->name('login');
Route::prefix('tasks')->group(function () {
    Route::get('/2',[App\Http\Controllers\Controller::class,'task2'])->name('task2');
    Route::get('/3',[App\Http\Controllers\Controller::class,'task3'])->name('task3');
    Route::get('/4',[App\Http\Controllers\Controller::class,'task4'])->name('task4');
    Route::get('/5/{element_id}',[App\Http\Controllers\Controller::class,'task5'])->name('task5');
    Route::get('/6',[App\Http\Controllers\Controller::class,'task6'])->name('task6');
});
