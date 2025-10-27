<?php

namespace App\Services\ACF\Groups;

/**
 * Tech Stack ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.3
 */
class HomepageTechStackGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_tech_stack_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_tech_stack',
            'label' => 'Sekcja Stack Technologiczny',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_tech_headline',
                    'label' => 'Nagłówek',
                    'name' => 'tech_stack_headline',
                    'type' => 'text',
                    'instructions' => 'Nagłówek sekcji stack technologicznego.',
                    'required' => true,
                    'default_value' => 'Technology Stack',
                    'maxlength' => 100,
                ],
                [
                    'key' => 'field_homepage_tech_introduction',
                    'label' => 'Wstęp',
                    'name' => 'tech_stack_introduction',
                    'type' => 'textarea',
                    'instructions' => 'Krótki wstęp do sekcji stack technologicznego wyjaśniający zakres technologii.',
                    'required' => false,
                    'maxlength' => 400,
                    'rows' => 3,
                ],
            ],
        ];
    }

    /**
     * Get the Tech Stack Headline
     * @return string
     */
    public function getHeadline(): string
    {
        return get_field($this->name)['tech_stack_headline'] ?? '';
    }

    /**
     * Get the Tech Stack Introduction
     * @return string
     */
    public function getIntroduction(): string
    {
        return get_field($this->name)['tech_stack_introduction'] ?? '';
    }

    /**
     * Get all Tech Stack section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
