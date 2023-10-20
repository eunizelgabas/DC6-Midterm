<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/sales/create', [SalesController::class , 'create'])->name('sales.create')->middleware('can:record-payments');
    Route::middleware('can:make-sales')->group(function(){
        Route::get('/sales', [SalesController::class , 'index'])->name('sales');
        Route::get('/products', [ProductController::class , 'index'])->name('products');
        Route::get('/products/create', [ProductController::class , 'create'])->middleware('can:create-product');
        Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->middleware('can:edit-product');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('can:delete-product');
    });

    Route::middleware('can:manage')->group(function(){
        Route::get('/clients', [ClientController::class , 'index'])->name('clients');
        Route::get('/clients/create', [ClientController::class , 'create']);
        Route::get('/clients/edit/{client}', [ClientController::class, 'edit']);
        Route::get('/clients/show/{client}', [ClientController::class, 'show']);
        Route::delete('/clients/{client}', [ClientController::class, 'destroy']);
    });

    Route::middleware('can:manage-categories')->group(function(){
        Route::get('/categories', [CategoryController::class , 'index'])->name('categories');
    });

    Route::middleware('can:manage-users')->group(function(){
        Route::get('/users', [UserController::class , 'index'])->name('users');
        Route::get('/users/create', [UserController::class , 'create']);
        Route::get('/users/edit/{user}', [UserController::class, 'edit']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);
    });

});

require __DIR__.'/auth.php';
