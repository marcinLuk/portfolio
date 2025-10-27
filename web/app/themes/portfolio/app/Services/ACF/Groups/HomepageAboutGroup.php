<?php

namespace App\Services\ACF\Groups;

/**
 * About ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.2
 */
class HomepageAboutGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_about_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_about',
            'label' => 'Sekcja O Mnie',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_about_headline',
                    'label' => 'Nagłówek sekcji',
                    'name' => 'about_headline',
                    'type' => 'text',
                    'instructions' => 'Nagłówek sekcji.',
                    'required' => true,
                    'default_value' => 'O Mnie',
                    'maxlength' => 100,
                ],
                [
                    'key' => 'field_homepage_about_introduction',
                    'label' => 'Wstęp',
                    'name' => 'about_introduction',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => true,
                    'default_value' => 'Professional introduction text',
                    'maxlength' => 500,
                    'rows' => 4,
                ],
                [
                    'key' => 'field_homepage_about_differentiators',
                    'label' => 'Kluczowe Różnicowania',
                    'name' => 'about_differentiators',
                    'type' => 'repeater',
                    'instructions' => '.',
                    'required' => false,
                    'min' => 3,
                    'max' => 6,
                    'layout' => 'table',
                    'button_label' => 'Dodaj różnicowanie',
                    'sub_fields' => [
                        [
                            'key' => 'field_homepage_about_diff_title',
                            'label' => 'Tytuł',
                            'name' => 'differentiator_title',
                            'type' => 'text',
                            'instructions' => 'Krótki tytuł różnicowania',
                            'required' => true,
                            'default_value' => 'Modern Stack Expertise',
                            'maxlength' => 80,
                        ],
                        [
                            'key' => 'field_homepage_about_diff_description',
                            'label' => 'Opis',
                            'name' => 'differentiator_description',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => true,
                            'maxlength' => 300,
                            'rows' => 3,
                        ],
                        [
                            'key' => 'field_homepage_about_diff_image',
                            'label' => 'Ikona/Obraz (Opcjonalnie)',
                            'name' => 'differentiator_image',
                            'type' => 'image',
                            'instructions' => 'Opcjonalna ikona',
                            'required' => false,
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Get the About Headline
     * @return string
     */
    public function getHeadline(): string
    {
        return get_field($this->name)['about_headline'] ?? '';
    }

    /**
     * Get the About Introduction
     * @return string
     */
    public function getIntroduction(): string
    {
        return get_field($this->name)['about_introduction'] ?? '';
    }

    /**
     * Get the About Differentiators
     * @return array
     */
    public function getDifferentiators(): array
    {
        return get_field($this->name)['about_differentiators'] ?? [];
    }

    /**
     * Get all About section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
