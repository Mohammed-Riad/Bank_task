<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionsController;

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



// Add To DataBase

Route::get('/', [TransactionsController::class, 'create']);
Route::post('Add', [TransactionsController::class, 'store']);

// End To DataBase
