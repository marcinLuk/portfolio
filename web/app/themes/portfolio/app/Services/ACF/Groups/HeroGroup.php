<?php

namespace App\Services\ACF\Groups;

class HeroGroup
{
    public function groupArray() : array
    {
        return array(
            'key' => 'field_hero_group',
            'label' => 'Hero Section',
            'name' => 'hero_section',
            'type' => 'group',
            'sub_fields' => array(
                array(
                    'key' => 'field_hero_title',
                    'label' => 'Title',
                    'name' => 'hero_title',
                    'type' => 'text',
                    'required' => false,
                ),
                array(
                    'key' => 'field_hero_image',
                    'label' => 'Image',
                    'name' => 'hero_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'required' => false,
                ),
            ),
        );
    }

}
