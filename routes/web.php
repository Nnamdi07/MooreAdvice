<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', [TodoController::class, 'index']);

Route::get('docs', [FormController::class, 'tasks']);
Route::post('doc-data', [FormController::class, 'store']);
Route::get('form', [FormController::class, 'forms']);
Route::post('form-data', [FormController::class, 'form_store']);
Route::get('success', [FormController::class, 'success']);
