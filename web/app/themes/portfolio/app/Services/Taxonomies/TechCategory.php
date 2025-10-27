<?php

namespace App\Services\Taxonomies;

/**
 * Technology Category Taxonomy
 * Hierarchical taxonomy for categorizing technologies in the tech stack
 */
class TechCategory
{
    /**
     * Taxonomy key
     */
    private string $taxonomy = 'tech_category';

    /**
     * Register the taxonomy
     *
     * @return void
     */
    public function setupHooks(): void
    {
        add_action('init', fn() => $this->registerTaxonomy());
    }

    /**
     * Register tech_category taxonomy
     *
     * @return void
     */
    private function registerTaxonomy(): void
    {
        $labels = [
            'name'                       => 'Kategorie Technologii',
            'singular_name'              => 'Kategoria Technologii',
            'menu_name'                  => 'Kategorie Technologii',
            'all_items'                  => 'Wszystkie Kategorie',
            'parent_item'                => 'Kategoria Nadrzędna',
            'parent_item_colon'          => 'Kategoria Nadrzędna:',
            'new_item_name'              => 'Nowa Kategoria',
            'add_new_item'               => 'Dodaj Nową Kategorię',
            'edit_item'                  => 'Edytuj Kategorię',
            'update_item'                => 'Aktualizuj Kategorię',
            'view_item'                  => 'Zobacz Kategorię',
            'separate_items_with_commas' => 'Oddziel kategorie przecinkami',
            'add_or_remove_items'        => 'Dodaj lub usuń kategorie',
            'choose_from_most_used'      => 'Wybierz z najczęściej używanych',
            'popular_items'              => 'Popularne Kategorie',
            'search_items'               => 'Szukaj Kategorii',
            'not_found'                  => 'Nie znaleziono kategorii',
            'no_terms'                   => 'Brak kategorii',
            'items_list'                 => 'Lista kategorii',
            'items_list_navigation'      => 'Nawigacja listy kategorii',
        ];

        $args = [
            'labels'            => $labels,
            'hierarchical'      => true,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => false,
            'show_in_rest'      => true,
            'rewrite'           => ['slug' => 'tech-category', 'hierarchical' => true],
        ];

        register_taxonomy($this->taxonomy, ['tech_stack', 'portfolio_project'], $args);
    }
}
