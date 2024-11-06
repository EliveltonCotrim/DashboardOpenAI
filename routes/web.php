<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Sale\Index as IndexSale;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/clients', ClientController::class);

    Route::get('/sales/index', IndexSale::class)->name('sales.index');
});


require __DIR__ . '/auth.php';
