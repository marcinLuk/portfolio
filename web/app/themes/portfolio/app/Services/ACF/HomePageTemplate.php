<?php

namespace App\Services\ACF;

use App\Services\ACF\Groups\TestGroup;
use App\Services\ACF\Groups\HeroGroup;

class HomePageTemplate implements PageTemplateInterface
{
    private $groups = [];
    private $templateBladeName = 'template-homepage.blade.php';
    private $key = 'homepageMainGroup';
    private $title = 'Home Page Template Fields';

    /**
     *  Constructor
     */
    public function __construct(
        protected TestGroup $testGroup,
        protected HeroGroup $heroGroup,
    ) {
        $this->groups = [
            $this->heroGroup->groupArray(),
            $this->testGroup->groupArray(),
        ];
    }
    /**
     * Setup ACF Template Field Groups, this action is called in the setup.php
     */
    public function setupTemplate()
    {
        add_action('acf/init', function () {
            $this->createTemplateGroup();
        });
    }
    /**
     * Create the ACF Field Group for the template
     */
    public function createTemplateGroup()
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
