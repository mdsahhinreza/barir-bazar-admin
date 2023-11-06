<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeleveryboyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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
    return view('backend.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Product 
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/create-product', [ProductController::class, 'create'])->name('create.product');
    Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');

    // Category 
    Route::get('/create-category', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('store.category');

    // Shop 
    Route::get('/create-shop', [ShopController::class, 'create'])->name('create.shop');

    // Delevery Man 
    Route::get('/create-delevery-man', [DeleveryboyController::class, 'create'])->name('create.delevery.boy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
