<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

Route::get('/', fn() => view('welcome'));

// Giao diện chính sau đăng nhập
Route::get(
    '/dashboard',
    fn(Request $request) =>
    $request->user()->role === 'admin'
        ? redirect()->route('admin.products.index')
        : redirect()->route('products.index')
)->middleware(['auth', 'verified'])->name('dashboard');

// Quản lý profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Giao diện khách hàng
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


// Giao diện quản trị admin
Route::middleware(['auth'])
    ->prefix('admin/products')
    ->name('admin.products.')
    ->group(function () {
        Route::get('/', [ProductAdminController::class, 'index'])->name('index');
        Route::get('/create', [ProductAdminController::class, 'create'])->name('create');
        Route::post('/', [ProductAdminController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ProductAdminController::class, 'edit'])->name('edit');
        Route::post('/{id}', [ProductAdminController::class, 'update'])->name('update');
        Route::delete('/{id}', [ProductAdminController::class, 'destroy'])->name('destroy');
        Route::get('/{id}', [ProductAdminController::class, 'show'])->name('show');
        Route::get('products', [ProductAdminController::class, 'index'])->name('admin.products.index');
    });

// Route logout dùng chung cho mọi loại user
Route::middleware('auth')->group(function () {
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

require __DIR__ . '/auth.php';
