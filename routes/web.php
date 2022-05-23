<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InjectViewController;


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


/*
|--------------------------------------------------------------------------
| Inject View Routes
|--------------------------------------------------------------------------
*/

Route::get('/finance',[InjectViewController::class,'financialData']);