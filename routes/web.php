<?php

use Illuminate\Support\Facades\Artisan;
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


//custody
Route::get('/custody', [App\Http\Controllers\CustodyController::class, 'get'])->name('get_custody');
Route::post('/store_custody', [App\Http\Controllers\CustodyController::class, 'store'])->name('store_custody');
Route::post('/update_custody', [App\Http\Controllers\CustodyController::class, 'update'])->name('update_custody');
Route::get('delete_custody{id}', [App\Http\Controllers\CustodyController::class, 'destroy'])->name('delete_custody');


//document
Route::get('/document', [App\Http\Controllers\DocumentController::class, 'get'])->name('get_document');
Route::post('/store_document', [App\Http\Controllers\DocumentController::class, 'store'])->name('store_document');
Route::post('/update_document', [App\Http\Controllers\DocumentController::class, 'update'])->name('update_document');
Route::get('delete_document{id}', [App\Http\Controllers\DocumentController::class, 'destroy'])->name('delete_document');




























