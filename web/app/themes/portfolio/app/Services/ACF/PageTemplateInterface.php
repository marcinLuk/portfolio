<?php

namespace App\Services\ACF;

interface PageTemplateInterface
{
    /**
     * Setup ACF Template Field Groups, this action is called in the setup.php\
     * @return void
     */
    public function setupTemplate();

    /**
     * Create the ACF Field Group for the template
     * @return void
     */
    public function createTemplateGroup();
}
