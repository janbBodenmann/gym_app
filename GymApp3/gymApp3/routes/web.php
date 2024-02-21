<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/arm',function() {
    return view('arm');
})->middleware(['auth', 'verified'])->name('arm');


Route::get('/beine',function() {
    return view('beine');
})->middleware(['auth', 'verified'])->name('beine');


Route::get('/ruecken',function() {
    return view('rücken');
})->middleware(['auth', 'verified'])->name('ruecken');


Route::get('/bauch',function() {
    return view('bauch');
})->middleware(['auth', 'verified'])->name('bauch');

Route::get('/page1',function() {
    return view('page1');
})->middleware(['auth', 'verified'])->name('page1');

Route::get('/page2',function() {
    return view('page2');
})->middleware(['auth', 'verified'])->name('page2');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
