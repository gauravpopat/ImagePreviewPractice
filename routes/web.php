<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('upload',function(){
    return view('upload_image');
})->name('upload');

Route::controller(HomeController::class)->group(function () {
    Route::post('upload','upload_image')->name('upload');
    Route::get('show','show')->name('show');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('updateForm/{id}','updateForm')->name('updateForm');
    Route::post('update','update_image')->name('update');
});