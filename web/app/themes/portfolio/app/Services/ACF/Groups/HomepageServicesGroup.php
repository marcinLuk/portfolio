<?php

namespace App\Services\ACF\Groups;

/**
 * Services ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.4
 * Includes nested repeater structure for service groups and individual services
 */
class HomepageServicesGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_services_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_services',
            'label' => 'Sekcja Usług',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_services_headline',
                    'label' => 'Nagłówek',
                    'name' => 'services_headline',
                    'type' => 'text',
                    'instructions' => 'Nagłówek sekcji usług.',
                    'required' => true,
                    'default_value' => 'Services',
                    'maxlength' => 100,
                ],
                [
                    'key' => 'field_homepage_services_introduction',
                    'label' => 'Wstęp',
                    'name' => 'services_introduction',
                    'type' => 'textarea',
                    'instructions' => 'Krótki wstęp wyjaśniający zakres oferowanych usług.',
                    'required' => false,
                    'maxlength' => 400,
                ],
                [
                    'key' => 'field_homepage_service_groups',
                    'label' => 'Grupy Usług',
                    'name' => 'service_groups',
                    'type' => 'repeater',
                    'instructions' => 'Główne grupy usług (np. WordPress Development, AI Automation). Dwa poziomy zagnieżdżenia.',
                    'required' => false,
                    'min' => 1,
                    'max' => 5,
                    'layout' => 'block',
                    'button_label' => 'Dodaj grupę usług',
                    'sub_fields' => [
                        [
                            'key' => 'field_homepage_service_group_title',
                            'label' => 'Tytuł grupy',
                            'name' => 'service_group_title',
                            'type' => 'text',
                            'instructions' => 'Tytuł głównej grupy usług (np. "WordPress Development").',
                            'required' => true,
                            'default_value' => 'WordPress Development',
                            'maxlength' => 80,
                        ],
                        [
                            'key' => 'field_homepage_service_group_description',
                            'label' => 'Opis grupy',
                            'name' => 'service_group_description',
                            'type' => 'textarea',
                            'instructions' => 'Opis grupy usług wyjaśniający jej zakres.',
                            'required' => false,
                            'maxlength' => 300,
                        ],
                        [
                            'key' => 'field_homepage_service_items',
                            'label' => 'Poszczególne usługi',
                            'name' => 'service_items',
                            'type' => 'repeater',
                            'instructions' => 'Lista poszczególnych usług w ramach tej grupy.',
                            'required' => false,
                            'min' => 1,
                            'max' => 8,
                            'layout' => 'table',
                            'button_label' => 'Dodaj usługę',
                            'sub_fields' => [
                                [
                                    'key' => 'field_homepage_service_name',
                                    'label' => 'Nazwa usługi',
                                    'name' => 'service_name',
                                    'type' => 'text',
                                    'instructions' => 'Nazwa konkretnej usługi (np. "Custom Theme Development").',
                                    'required' => true,
                                    'maxlength' => 100,
                                ],
                                [
                                    'key' => 'field_homepage_service_description',
                                    'label' => 'Opis usługi',
                                    'name' => 'service_description',
                                    'type' => 'textarea',
                                    'instructions' => 'Krótki opis usługi i jej korzyści dla klienta. 1-2 zdania.',
                                    'required' => true,
                                    'maxlength' => 300,
                                    'rows' => 3,
                                ],
                                [
                                    'key' => 'field_homepage_service_icon',
                                    'label' => 'Ikona',
                                    'name' => 'service_icon',
                                    'type' => 'image',
                                    'instructions' => 'Opcjonalna ikona reprezentująca tę usługę. Zalecane formaty: SVG, PNG 200x200px.',
                                    'required' => false,
                                    'return_format' => 'array',
                                    'preview_size' => 'thumbnail',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Get the Services Headline
     * @return string
     */
    public function getHeadline(): string
    {
        return get_field($this->name)['services_headline'] ?? '';
    }

    /**
     * Get the Services Introduction
     * @return string
     */
    public function getIntroduction(): string
    {
        return get_field($this->name)['services_introduction'] ?? '';
    }

    /**
     * Get all Service Groups with nested items
     * @return array
     */
    public function getServiceGroups(): array
    {
        return get_field($this->name)['service_groups'] ?? [];
    }

    /**
     * Get all Services section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
