<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    ProfileController,
    ProductController,
    CategoryController,
    CartController
};
use App\Http\Controllers\Admin\ProductAdminController;

// Trang chủ
Route::view('/', 'welcome');

// Dashboard theo role
Route::get('/dashboard', function (Request $request) {
    return $request->user()->role === 'admin'
        ? redirect()->route('admin.products.index')
        : redirect()->route('products.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth routes dùng chung
Route::middleware('auth')->group(function () {
    // Profile
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

// Khách hàng
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
});
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/add/{id}', [CartController::class, 'add'])->name('add');
    Route::get('/remove/{id}', [CartController::class, 'remove'])->name('remove');
});

// Admin quản lý sản phẩm
Route::middleware('auth')->prefix('admin/products')->name('admin.products.')->group(function () {
    Route::controller(ProductAdminController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}', 'show')->name('show');
    });
});

require __DIR__ . '/auth.php';
