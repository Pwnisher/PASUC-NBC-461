<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

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
    return view('accomplishment-add-summary');
});

Route::get('/accomplishment-add-summary', [AddSummaryController::class, 'accomplishment-add-summary']);

Route::get('/add', [AddController::class, 'add']);



