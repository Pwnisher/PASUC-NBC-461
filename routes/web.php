<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\DBController;

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
    return view('home');
});

Route::get('DBController', [DBController::class, 'index']);

Route::get('/home', [TabController::class, 'home']);
Route::get('/eqar', [TabController::class, 'eqar']);
Route::get('/application', [TabController::class, 'application'])->name('application');
Route::get('/application/{any}', [TabController::class, 'show'])->where('any', '.*');

Route::get('/add-documents', [AddController::class, 'addDocuments']);
Route::get('/add-documents-KRA1', [AddController::class, 'showPAGEaddKRA1']);
Route::get('/add-documents-KRA2', [AddController::class, 'showPAGEaddKRA2']);
Route::get('/add-documents-KRA3', [AddController::class, 'showPAGEaddKRA3']);
Route::get('/add-documents-KRA4', [AddController::class, 'showPAGEaddKRA4']);
