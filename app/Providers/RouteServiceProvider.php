<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Đây là URL Laravel sẽ redirect sau đăng nhập
     */
    public const HOME = '/products'; // đổi thành bất kỳ URL bạn muốn

    public function boot(): void
    {
        parent::boot();

        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
