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

Route::get('/', [indexCon::class, 'pa']);

Route::get('/home', [indexCon::class, 'pa']);

Route::get('/products/1', function () {
    return view('products/1');
});

