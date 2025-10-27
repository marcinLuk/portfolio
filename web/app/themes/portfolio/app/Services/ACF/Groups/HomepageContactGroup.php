<?php

namespace App\Services\ACF\Groups;

/**
 * Contact ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.6
 */
class HomepageContactGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_contact_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_contact',
            'label' => 'Sekcja Kontakt',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_contact_title',
                    'label' => 'Tytuł',
                    'name' => 'contact_section_title',
                    'type' => 'text',
                    'instructions' => 'Tytuł sekcji kontakt.',
                    'required' => true,
                    'default_value' => 'Get In Touch',
                    'maxlength' => 100,
                ],
                [
                    'key' => 'field_homepage_contact_intro',
                    'label' => 'Wstęp formularza',
                    'name' => 'contact_form_intro',
                    'type' => 'textarea',
                    'instructions' => 'Krótki wstęp zapraszający do wypełnienia formularza kontaktowego.',
                    'required' => false,
                    'maxlength' => 500,
                    'rows' => 4,
                ],
                [
                    'key' => 'field_homepage_contact_form_shortcode',
                    'label' => 'Shortcode Contact Form 7',
                    'name' => 'contact_form_shortcode',
                    'type' => 'text',
                    'instructions' => 'Wklej shortcode z Contact Form 7 formularza kontaktowego.',
                    'required' => true,
                    'default_value' => '[contact-form-7 id="" title=""]',
                    'maxlength' => 200,
                ],
            ],
        ];
    }

    /**
     * Get the Contact Section Title
     * @return string
     */
    public function getTitle(): string
    {
        return get_field($this->name)['contact_section_title'] ?? '';
    }

    /**
     * Get the Contact Form Introduction
     * @return string
     */
    public function getIntroduction(): string
    {
        return get_field($this->name)['contact_form_intro'] ?? '';
    }

    /**
     * Get the Contact Form Shortcode
     * @return string
     */
    public function getFormShortcode(): string
    {
        return get_field($this->name)['contact_form_shortcode'] ?? '';
    }

    /**
     * Get all Contact section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
