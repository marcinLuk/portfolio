<?php

namespace App\Services\ACF\Groups;

/**
 * Portfolio ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.5
 * Note: Portfolio projects are retrieved from custom post type, not repeater fields
 */
class HomepagePortfolioGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_portfolio_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_portfolio',
            'label' => 'Sekcja Portfolio',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_portfolio_headline',
                    'label' => 'Nagłówek',
                    'name' => 'portfolio_headline',
                    'type' => 'text',
                    'instructions' => 'Nagłówek sekcji portfolio.',
                    'required' => true,
                    'default_value' => 'Portfolio',
                    'maxlength' => 100,
                ],
                [
                    'key' => 'field_homepage_portfolio_intro',
                    'label' => 'Wstęp',
                    'name' => 'portfolio_section_intro',
                    'type' => 'textarea',
                    'instructions' => 'Krótki wstęp do sekcji portfolio wyjaśniający typ projektów.',
                    'required' => false,
                    'maxlength' => 400,
                    'rows' => 3,
                ],
            ],
        ];
    }

    /**
     * Get the Portfolio Headline
     * @return string
     */
    public function getHeadline(): string
    {
        return get_field($this->name)['portfolio_headline'] ?? '';
    }

    /**
     * Get the Portfolio Section Introduction
     * @return string
     */
    public function getIntroduction(): string
    {
        return get_field($this->name)['portfolio_section_intro'] ?? '';
    }

    /**
     * Get all Portfolio section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
