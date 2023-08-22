<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\TabController;
use Illuminate\Http\Request;
use App\Http\Controllers\DBController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SortController;


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

Route::get('DBController', [DBController::class, 'store']);

Route::get('/home', [TabController::class, 'home']);

Route::get('/home', [DBController::class, 'home']);
Route::get('/eqar', [DBController::class, 'eqar']);
Route::get('/eqar', [DBController::class, 'getEqar'])->name('eqar');
Route::put('/eqar-update-applied/{eqarId}', [DBController::class, 'eqarUpdateApplied']);
Route::get('/search', [SearchController::class, 'eqarSearch']);
Route::get('/sort', [SortController::class, 'sort']);


Route::get('/application', [DBController::class, 'getPasuc'])->name('application');
Route::get('/application/{any}', [DBController::class, 'getPasuc'])->where('any', '.*');
Route::put('/pasuc-update-applied/{pasucId}', [DBController::class, 'pasucUpdateApplied']);

Route::get('/add-documents', [AddController::class, 'addDocuments']);
Route::get('/add-documents-KRA1', [AddController::class, 'showPAGEaddKRA1']);
Route::get('/add-documents-KRA2', [AddController::class, 'showPAGEaddKRA2']);
Route::get('/add-documents-KRA3', [AddController::class, 'showPAGEaddKRA3']);
Route::get('/add-documents-KRA4', [AddController::class, 'showPAGEaddKRA4']);


