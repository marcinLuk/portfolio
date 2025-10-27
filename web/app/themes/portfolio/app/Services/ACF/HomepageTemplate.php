<?php

namespace App\Services\ACF;

use App\Services\ACF\Groups\HeroGroup;
use App\Services\ACF\Groups\HomepageAboutGroup;
use App\Services\ACF\Groups\HomepageTechStackGroup;
use App\Services\ACF\Groups\HomepageServicesGroup;
use App\Services\ACF\Groups\HomepagePortfolioGroup;
use App\Services\ACF\Groups\HomepageContactGroup;

/**
 * Homepage Template ACF Field Group Configuration
 * Manages all ACF field groups for the Homepage template
 */
class HomepageTemplate implements PageTemplateInterface
{
    public $groups = [];
    private $templateBladeName = 'template-homepage.blade.php';
    private $key = 'group_homepage_main';
    private $title = 'Homepage Template Fields';

    /**
     * Constructor - Inject ACF field group classes
     */
    public function __construct(
        protected HeroGroup $heroGroup,
        protected HomepageAboutGroup $aboutGroup,
        protected HomepageTechStackGroup $techStackGroup,
        protected HomepageServicesGroup $servicesGroup,
        protected HomepagePortfolioGroup $portfolioGroup,
        protected HomepageContactGroup $contactGroup,
    ) {
        $this->groups = [
            $this->heroGroup->groupArray(),
            $this->aboutGroup->groupArray(),
            $this->techStackGroup->groupArray(),
            $this->servicesGroup->groupArray(),
            $this->portfolioGroup->groupArray(),
            $this->contactGroup->groupArray(),
        ];
    }

    /**
     * Setup ACF Template Field Groups, this action is called in the setup.php
     * @return void
     */
    public function setupTemplate(): void
    {
        add_action('acf/init', function () {
            $this->createTemplateGroup();
        });
    }

    /**
     * Create the ACF Field Group for the template
     * @return void
     */
    public function createTemplateGroup(): void
    {
        acf_add_local_field_group([
            'key' => $this->key,
            'title' => $this->title,
            'fields' => $this->groups,
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => $this->templateBladeName,
                    ],
                ],
            ],
        ]);
    }
}
