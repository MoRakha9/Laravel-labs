<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexCon;

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

Route::get('/', [indexCon::class, 'product']);

Route::get('/home', [indexCon::class, 'product']);

Route::get('/product_details/{n}', [indexCon::class, 'details']);

