<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\guzelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guzel', function () {
    return view('guzel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::resource('books', bookController::class);
    Route::resource('users', userController::class);
    Route::get('books.history', [BookController::class, 'history'])->name('books.history');
    Route::get('books/history/edit/{id}', [BookController::class, 'historyEdit'])->name('books.historyEdit');
    Route::put('books/history/update/{id}', [BookController::class, 'historyUpdate'])->name('books.historyUpdate');

});

Route::group(['middleware' => ['auth', 'role:anggota']], function () {
    Route::resource('anggota', anggotaController::class);
});


// Route::resource('guzel', guzelController::class );

require __DIR__.'/auth.php';
