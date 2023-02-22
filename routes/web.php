<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraappliController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LaraappliController::class, 'index']);
Route::post('/create', [LaraappliController::class, 'create']);
Route::get('/thanks', [LaraappliController::class, 'thanks']);