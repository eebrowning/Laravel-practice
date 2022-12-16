<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {//should pass data here instead of controllers?
        $product= json_decode(file_get_contents(storage_path() . '/product.json'),true);

        view()->share('productx', $product['contentElement']['values']['mediaCollection']);

    }
}
