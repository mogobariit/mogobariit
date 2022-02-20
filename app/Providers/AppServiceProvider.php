<?php

namespace App\Providers;

use App\Models\Logo;
use App\Models\topbar;
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
    {
        $topbar = topbar::latest()->limit(1)->get();
        view()->share('topbar',$topbar);
        $logos = Logo::latest()->limit(1)->get();
        view()->share('logos',$logos);
    }
}