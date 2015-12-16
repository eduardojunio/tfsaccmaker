<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'partials.sidebar', 'App\Http\ViewComposers\PartialsSidebarComposer'
        );

        /**
         * Pass the authenticaded user to the navigation bar.
         */
        view()->composer('partials.nav', function ($view) {
            $user = Auth::user();
            $view->with('user', $user);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
