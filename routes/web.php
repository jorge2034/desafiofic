<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TramiteController;
use App\Models\Comuna;
use App\Models\Rubro;
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

Route::get('/dashboard', function () {
    $rubro=Rubro::all()->toArray();
    $comuna=Comuna::all()->toArray();
    return view('dashboard',compact('rubro','comuna'));
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/requisitos',function () {
        return view('requisitos');
    })->name('requisitosruta');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('tramite', TramiteController::class);
});

require __DIR__.'/auth.php';
