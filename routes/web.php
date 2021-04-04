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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin::class, 'index']);
Route::get('/exam_categry', [App\Http\Controllers\Admin::class, 'exam_category']);
Route::post('/add_new_categry', [App\Http\Controllers\Admin::class, 'add_new_category']);
Route::get('/admin/delete_category/{id}', [App\Http\Controllers\Admin::class, 'delete_category']);