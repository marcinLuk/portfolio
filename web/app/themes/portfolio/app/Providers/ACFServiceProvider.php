<?php

namespace App\Providers;

use App\Services\ACF\Groups\HeroGroup;
use App\Services\ACF\Groups\HomepageAboutGroup;
use App\Services\ACF\Groups\HomepageTechStackGroup;
use App\Services\ACF\Groups\HomepageServicesGroup;
use App\Services\ACF\Groups\HomepagePortfolioGroup;
use App\Services\ACF\Groups\HomepageContactGroup;
use App\Services\ACF\HomepageTemplate;
use Roots\Acorn\Sage\SageServiceProvider;

/**
 * ACF Service Provider
 * Registers all ACF field groups and template classes
 */
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
        $this->app->singleton('HeroGroup', HeroGroup::class);
        $this->app->singleton('HomepageAboutGroup', HomepageAboutGroup::class);
        $this->app->singleton('HomepageTechStackGroup', HomepageTechStackGroup::class);
        $this->app->singleton('HomepageServicesGroup', HomepageServicesGroup::class);
        $this->app->singleton('HomepagePortfolioGroup', HomepagePortfolioGroup::class);
        $this->app->singleton('HomepageContactGroup', HomepageContactGroup::class);
    }

    /**
     * Boot ACF services after all services are registered.
     * @return void
     */
    public function boot()
    {
        // Register ACF Templates
        $this->app->singleton('HomepageTemplate', HomepageTemplate::class);
    }
}
