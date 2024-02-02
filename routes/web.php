<?php

use App\Http\Controllers\ProdukController;
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
    return view('landingpage.LP');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('Dasboard');

Route::middleware('auth')->group(function () {
    Route::prefix('/')->group(function() {
        Route::get('/cerita/Jaka-tarub',[ProdukController::class, 'cerita'])->name('cerita');
        Route::get('/cerita/Sangkuriang',[ProdukController::class, 'cerita1'])->name('cerita1');
        Route::get('/cerita/joko_kendil',[ProdukController::class, 'joko_kendil'])->name('joko_kendil');
        Route::get('/cerita',[ProdukController::class, 'cerita2'])->name('cerita2');
        Route::get('/video',[ProdukController::class, 'video'])->name('video');
        Route::post('/logout',[ProdukController::class, 'logout'])->name('logout');

    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
