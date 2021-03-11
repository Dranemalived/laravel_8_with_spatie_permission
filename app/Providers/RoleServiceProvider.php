<?php

namespace App\Providers;

use App\View\Composers\RoleComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['partials.body_sidebar', 'admin.product'],
            RoleComposer::class
        );
    }
}
