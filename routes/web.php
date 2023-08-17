<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AddSummaryController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/eqar', [AddSummaryController::class, 'eQAR']);
Route::get('/accomplishment', [AddSummaryController::class, 'addsummary']);
Route::get('/add', [AddController::class, 'add']);
Route::get('/add-documents-KRA1', [AddController::class, 'showPAGEaddKRA1']);
Route::get('/add-documents-KRA2', [AddController::class, 'showPAGEaddKRA2']);
Route::get('/add-documents-KRA3', [AddController::class, 'showPAGEaddKRA3']);
Route::get('/add-documents-KRA4', [AddController::class, 'showPAGEaddKRA4']);
