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
        /**Share to the defined view only. I don't want that */
        // View::composer(
        //     ['partials.body_sidebar', 'admin.product'],
        //     RoleComposer::class
        // );

        /**Share to all views */
        View::composer('*', RoleComposer::class);
    }
}
