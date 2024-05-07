<?php

namespace App\Providers;

use App\Models\Ecommerce\Product;
use App\Observers\Admin\ECommerce\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        /* registrando la ruta del observe admin product */
        Product::observe(ProductObserver::class);
    }
}
