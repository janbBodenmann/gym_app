<?php

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

use App\Http\Controllers\SideController;

Route::get('/', [SideController::class, 'welcome']);
Route::get('/home', [SideController::class, 'home']);
Route::get('/login', [SideController::class, 'login']);

