<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\User3Controller;
use App\Http\Controllers\User4Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*Route::middleware(['auth'])->group(function () {
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
});*/

// Route::get('/users', [User2Controller::class, 'index']);
// Route::get('/users/{user}', [User2Controller::class, 'show']);

// Route::get('/checkout/{token}', CheckoutController::class);

// Route::resource('users', User3Controller::class)->only(['index', 'destroy']);
// Route::resource('users', User3Controller::class)->except(['index', 'destroy']);

// Route::resources([
//     'users' => User3Controller::class,
//     'posts' => User3Controller::class,
// ]);

// Route::apiResources([
//     'users' => User3Controller::class,
//     'posts' => User3Controller::class,
// ]);

// Route::resource('users.comments', User3Controller::class)->shallow();

// Route::resource('posts', PostController::class);

// Route::get('users/{user:email}', [User4Controller::class, 'show']);

// Scoped
// Route::resource('users', User4Controller::class)->scoped([
//     'user' => 'email',
// ]);

Route::resourceVerbs([
    'create' => 'adicionar',
    'edit' => 'editar',
]);

Route::resource('usuarios', User4Controller::class);
