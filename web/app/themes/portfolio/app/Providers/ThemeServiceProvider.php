<?php

namespace App\Providers;

use App\Services\PostTypes\PortfolioProject;
use App\Services\PostTypes\TechStack;
use App\Services\Taxonomies\ProjectType;
use App\Services\Taxonomies\TechCategory;
use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        // Register Custom Post Types
        $this->app->singleton('PortfolioProject', PortfolioProject::class);
        $this->app->singleton('TechStack', TechStack::class);

        // Register Custom Taxonomies
        $this->app->singleton('ProjectType', ProjectType::class);
        $this->app->singleton('TechCategory', TechCategory::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

    }
}
