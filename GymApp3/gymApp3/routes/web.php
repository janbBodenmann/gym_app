<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Tipp;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/Tipps',function() {
    return view('tipps', [
        'tipps' => App\Models\Tipp::all()
    ]);
})->middleware(['auth', 'verified'])->name('Tipps');

// Single Tipp
Route::get('/tipp/{id}', function ($id) {
    $tipp = App\Models\Tipp::find($id);
    if ($tipp === null) {
        return redirect()->route('Tipps');
    } // überprüft ob der Tipp existiert
    return view('tipp', [
        'tipp' => $tipp
    ]);
})->middleware(['auth', 'verified'])->name('Tipp');

// Uebungen
Route::get('/uebungen',function() {
    return view('uebungen', [
        'Uebungen' => App\Models\Uebungen::all()
    ]);
})->middleware(['auth', 'verified'])->name('Uebungen');

// Single Uebung
Route::get('/uebung/{id}', function ($id) {
    $uebung = App\Models\Uebungen::find($id);
    if ($uebung === null) {
        return redirect()->route('Uebungen');
    } // überprüft ob die Übung existiert
    return view('Uebung', [
        'uebung' => $uebung
    ]);
})->middleware(['auth', 'verified'])->name('Uebung');


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
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    
    
});

require __DIR__.'/auth.php';
