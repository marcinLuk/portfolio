<?php

namespace App\Services\PostTypes;

/**
 * Portfolio Project Custom Post Type
 * Manages individual portfolio case studies and projects
 */
class PortfolioProject
{
    /**
     * Post type key
     */
    private string $postType = 'portfolio_project';

    /**
     * Register the custom post type
     *
     * @return void
     */
    public function setupHooks(): void
    {
        add_action('init', fn() => $this->registerPostType());
    }

    /**
     * Register portfolio_project custom post type
     *
     * @return void
     */
    private function registerPostType(): void
    {
        $labels = [
            'name'                  => 'Projekty Portfolio',
            'singular_name'         => 'Projekt Portfolio',
            'menu_name'             => 'Portfolio',
            'name_admin_bar'        => 'Projekt Portfolio',
            'add_new'               => 'Dodaj Nowy',
            'add_new_item'          => 'Dodaj Nowy Projekt',
            'new_item'              => 'Nowy Projekt',
            'edit_item'             => 'Edytuj Projekt',
            'view_item'             => 'Zobacz Projekt',
            'all_items'             => 'Wszystkie Projekty',
            'search_items'          => 'Szukaj Projektów',
            'parent_item_colon'     => 'Projekt Nadrzędny:',
            'not_found'             => 'Nie znaleziono projektów.',
            'not_found_in_trash'    => 'Nie znaleziono projektów w koszu.',
            'featured_image'        => 'Obraz wyróżniający projektu',
            'set_featured_image'    => 'Ustaw obraz wyróżniający',
            'remove_featured_image' => 'Usuń obraz wyróżniający',
            'use_featured_image'    => 'Użyj jako obraz wyróżniający',
            'archives'              => 'Archiwum projektów',
            'insert_into_item'      => 'Wstaw do projektu',
            'uploaded_to_this_item' => 'Przesłane do tego projektu',
            'filter_items_list'     => 'Filtruj listę projektów',
            'items_list_navigation' => 'Nawigacja listy projektów',
            'items_list'            => 'Lista projektów',
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => ['slug' => 'portfolio'],
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-portfolio',
            'show_in_rest'       => true,
            'supports'           => ['title', 'editor', 'thumbnail'],
            'taxonomies'         => ['project_type', 'tech_category'],
        ];

        register_post_type($this->postType, $args);
    }
}
