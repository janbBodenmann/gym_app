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

Route::get('/Tipps',function() {
    return view('tipps', [
        'tipps' => App\Models\Tipp::all()
    ]);
})->middleware(['auth', 'verified'])->name('Tipps');

// Single Tipp
Route::get('/tipp/{id}', function ($id) {
    return view('tipp', [
        'tipp' => App\Models\Tipp::find($id)
    ]);
})->middleware(['auth', 'verified'])->name('Tipp');

Route::get('/Übungen',function() {
    return view('Übungen');
})->middleware(['auth', 'verified'])->name('Übungen');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/preis',function() {
    return view('preis');
})->middleware(['auth', 'verified'])->name('preis');

Route::get('/kontakt',function() {
    return view('kontakt');
})->middleware(['auth', 'verified'])->name('kontakt');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
