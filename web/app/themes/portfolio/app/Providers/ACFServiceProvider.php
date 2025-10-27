<?php

namespace App\Providers;

use App\Services\ACF\Groups\TestGroup;
use App\Services\ACF\Groups\HeroGroup;
use App\Services\ACF\HomePageTemplate;
use Roots\Acorn\Sage\SageServiceProvider;

class ACFServiceProvider extends SageServiceProvider
{
    /**
     * Register ACF services.
     *
     * @return void
     */
    public function register()
    {
        // Register ACF Field Groups
        $this->app->singleton('AcfTestGroup', TestGroup::class);
        $this->app->singleton('HeroGroup', HeroGroup::class);
    }

    /**
     * Register ACF after all services are registered.
     * @return void
     */
    public function boot()
    {
        // Register ACF Templates
        $this->app->singleton('HomePageTemplate', HomePageTemplate::class);

    }

}
