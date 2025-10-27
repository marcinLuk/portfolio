<?php

namespace App\Services\ACF\Groups;

interface ACFGroupInterface
{
    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array;

}
