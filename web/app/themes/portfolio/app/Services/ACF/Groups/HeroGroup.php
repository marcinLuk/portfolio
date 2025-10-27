<?php

namespace App\Services\ACF\Groups;

/**
 * Hero ACF Field Group for Homepage Template
 * Implements all fields as specified in ACF Implementation Plan Section 2.1
 */
class HeroGroup implements ACFGroupInterface
{
    /**
     * @var string The ACF group name
     */
    private $name = 'homepage_hero_section';

    /**
     * Get the ACF group array, to be used in a template field group
     * @return array
     */
    public function groupArray(): array
    {
        return [
            'key' => 'group_homepage_hero',
            'label' => 'Sekcja Hero',
            'name' => $this->name,
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_homepage_hero_headline',
                    'label' => 'Główny Nagłówek',
                    'name' => 'hero_headline',
                    'type' => 'text',
                    'instructions' => 'Główny nagłówek wyświetlany w sekcji hero',
                    'required' => true,
                    'default_value' => 'WordPress Developer + AI Automation Specialist',
                    'maxlength' => 150,
                ],
                [
                    'key' => 'field_homepage_hero_subheadline',
                    'label' => 'Podtytuł',
                    'name' => 'hero_subheadline',
                    'type' => 'text',
                    'instructions' => 'Krótka lista kluczowych technologii rozdzielonych separatorami.',
                    'required' => true,
                    'default_value' => 'WordPress • Laravel • AI Automation',
                    'maxlength' => 200,
                ],
                [
                    'key' => 'field_homepage_hero_cta_primary',
                    'label' => 'Przycisk CTA (Główny)',
                    'name' => 'hero_cta_primary_link',
                    'type' => 'link',
                    'instructions' => 'Link do sekcji Portfolio. Powinien być linkiem zakotwiczonym lub wewnętrznym.',
                    'required' => true,
                    'return_format' => 'array',
                ],
                [
                    'key' => 'field_homepage_hero_cta_secondary',
                    'label' => 'Przycisk CTA (Drugorzędny)',
                    'name' => 'hero_cta_secondary_link',
                    'type' => 'link',
                    'instructions' => 'Link do sekcji Kontakt. Powinien być linkiem zakotwiczonym lub wewnętrznym.',
                    'required' => true,
                    'return_format' => 'array',
                ],
                [
                    'key' => 'field_homepage_hero_bg_image',
                    'label' => 'Obraz tła (Opcjonalnie)',
                    'name' => 'hero_background_image',
                    'type' => 'image',
                    'instructions' => 'Dekoracyjny obraz tła lub element wizualny sekcji hero. Opcjonalny.',
                    'required' => false,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ],
            ],
        ];
    }

    /**
     * Get the Hero Headline
     * @return string
     */
    public function getHeadline(): string
    {
        return get_field($this->name)['hero_headline'] ?? '';
    }

    /**
     * Get the Hero Subheadline
     * @return string
     */
    public function getSubheadline(): string
    {
        return get_field($this->name)['hero_subheadline'] ?? '';
    }

    /**
     * Get the Primary CTA Link
     * @return array|null
     */
    public function getPrimaryCTA(): ?array
    {
        return get_field($this->name)['hero_cta_primary_link'] ?? null;
    }

    /**
     * Get the Secondary CTA Link
     * @return array|null
     */
    public function getSecondaryCTA(): ?array
    {
        return get_field($this->name)['hero_cta_secondary_link'] ?? null;
    }

    /**
     * Get the Hero Background Image
     * @return array|null
     */
    public function getBackgroundImage(): ?array
    {
        return get_field($this->name)['hero_background_image'] ?? null;
    }

    /**
     * Get all Hero section data as array
     * @return array
     */
    public function getAllData(): array
    {
        return get_field($this->name) ?? [];
    }
}
