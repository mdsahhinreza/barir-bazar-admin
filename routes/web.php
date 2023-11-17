<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeleveryboyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
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
    Route::get('/category-list', [CategoryController::class, 'index'])->name('categories');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('store.category');

    // Shop 
    Route::get('/create-shop', [ShopController::class, 'create'])->name('create.shop');
    Route::get('/shop-list', [ShopController::class, 'index'])->name('shops');
    Route::post('/store-shop', [ShopController::class, 'store'])->name('store.shop');

    // Delevery Man 
    Route::get('/create-delevery-man', [DeleveryboyController::class, 'create'])->name('create.delevery.boy');

    // Users 
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users-store', [UserController::class, 'store'])->name('users.store');
    Route::get('/delete/user/{id}', [UserController::class, 'destroy'])->name('destroy.users');
    Route::get('/delete/user/role/{id}', [UserController::class, 'roleDestroy'])->name('destroy.role');
    Route::get('/users-roles', [UserController::class, 'userRoleList'])->name('users.roles');
    Route::get('/users-roles-crete', [UserController::class, 'userRoleCreate'])->name('users.roles.create');
    Route::post('/users-roles-store', [UserController::class, 'userRoleStore'])->name('users.roles.store');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
