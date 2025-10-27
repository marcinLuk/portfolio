<?php

namespace App\Services\Taxonomies;

/**
 * Project Type Taxonomy
 * Non-hierarchical taxonomy for categorizing portfolio projects
 */
class ProjectType
{
    /**
     * Taxonomy key
     */
    private string $taxonomy = 'project_type';

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
     * Register project_type taxonomy
     *
     * @return void
     */
    private function registerTaxonomy(): void
    {
        $labels = [
            'name'                       => 'Typy Projektów',
            'singular_name'              => 'Typ Projektu',
            'menu_name'                  => 'Typy Projektów',
            'all_items'                  => 'Wszystkie Typy',
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'new_item_name'              => 'Nowy Typ Projektu',
            'add_new_item'               => 'Dodaj Nowy Typ',
            'edit_item'                  => 'Edytuj Typ',
            'update_item'                => 'Aktualizuj Typ',
            'view_item'                  => 'Zobacz Typ',
            'separate_items_with_commas' => 'Oddziel typy przecinkami',
            'add_or_remove_items'        => 'Dodaj lub usuń typy',
            'choose_from_most_used'      => 'Wybierz z najczęściej używanych',
            'popular_items'              => 'Popularne Typy',
            'search_items'               => 'Szukaj Typów',
            'not_found'                  => 'Nie znaleziono typów',
            'no_terms'                   => 'Brak typów',
            'items_list'                 => 'Lista typów',
            'items_list_navigation'      => 'Nawigacja listy typów',
        ];

        $args = [
            'labels'            => $labels,
            'hierarchical'      => false,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => false,
            'show_in_rest'      => true,
            'rewrite'           => ['slug' => 'project-type'],
        ];

        register_taxonomy($this->taxonomy, ['portfolio_project'], $args);
    }
}
