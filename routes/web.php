<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios/cadastrar', [UserController::class, 'store'])->name('users.store');
    Route::get('/usuarios/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('users.update');
    Route::put('/usuarios/{user}/profile', [UserController::class, 'updateProfile'])->name('users.updateProfile');
    Route::put('/usuarios/{user}/interests', [UserController::class, 'updateInterests'])->name('users.updateInterests');
    Route::put('/usuarios/{user}/roles', [UserController::class, 'updateRoles'])->name('users.updateRoles');
    Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
