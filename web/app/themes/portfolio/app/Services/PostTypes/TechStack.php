<?php

namespace App\Services\PostTypes;

/**
 * Tech Stack Custom Post Type
 * Manages individual technologies and tools in the technology stack
 */
class TechStack
{
    /**
     * Post type key
     */
    private string $postType = 'tech_stack';

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
     * Register tech_stack custom post type
     *
     * @return void
     */
    private function registerPostType(): void
    {
        $labels = [
            'name'                  => 'Technologie',
            'singular_name'         => 'Technologia',
            'menu_name'             => 'Stack Technologiczny',
            'name_admin_bar'        => 'Technologia',
            'add_new'               => 'Dodaj Nową',
            'add_new_item'          => 'Dodaj Nową Technologię',
            'new_item'              => 'Nowa Technologia',
            'edit_item'             => 'Edytuj Technologię',
            'view_item'             => 'Zobacz Technologię',
            'all_items'             => 'Wszystkie Technologie',
            'search_items'          => 'Szukaj Technologii',
            'parent_item_colon'     => 'Technologia Nadrzędna:',
            'not_found'             => 'Nie znaleziono technologii.',
            'not_found_in_trash'    => 'Nie znaleziono technologii w koszu.',
            'featured_image'        => 'Logo/Ikona technologii',
            'set_featured_image'    => 'Ustaw logo technologii',
            'remove_featured_image' => 'Usuń logo technologii',
            'use_featured_image'    => 'Użyj jako logo',
            'archives'              => 'Archiwum technologii',
            'insert_into_item'      => 'Wstaw do technologii',
            'uploaded_to_this_item' => 'Przesłane do tej technologii',
            'filter_items_list'     => 'Filtruj listę technologii',
            'items_list_navigation' => 'Nawigacja listy technologii',
            'items_list'            => 'Lista technologii',
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => ['slug' => 'tech-stack'],
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-admin-tools',
            'show_in_rest'       => true,
            'supports'           => ['title', 'editor', 'thumbnail'],
            'taxonomies'         => ['tech_category'],
        ];

        register_post_type($this->postType, $args);
    }
}
