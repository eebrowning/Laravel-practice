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
        $components= json_decode(file_get_contents(storage_path() . '/components.json'),true);
            $primary_global_menu = $components[0]["contentElement"];
            $footer_menu = $components[1]["contentElement"]; 

        view()->share('primary_global_menu', $primary_global_menu);
        view()->share('footer_menu', $footer_menu);
    }
}
