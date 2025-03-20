<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerryController;

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
    return view('accueil');
});

Route::get('/ferries', [FerryController::class, 'index'])->name('ferries.index');
Route::get('/ferries/create', [FerryController::class, 'create'])->name('ferries.create');
Route::post('/ferries', [FerryController::class, 'store'])->name('ferries.store');
Route::get('/ferries/{id}', [FerryController::class, 'show'])->name('ferries.show');
Route::delete('/ferries/{id}', [FerryController::class, 'destroy'])->name('ferries.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
