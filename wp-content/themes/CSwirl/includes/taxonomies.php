<?php

/**
 * Register custom taxonomies
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */

function register_custom_taxonomies()
{
    $args = [
        'labels' => [
            'name' => 'Menu Categories',
            'singular_name' => 'Menu Category',
            'search_items' => 'Search Menu Categories',
            'all_items' => 'All Menu Categories',
            'parent_item' => 'Parent Menu Category',
            'parent_item_colon' => 'Parent Menu Type:',
            'edit_item' => 'Edit Menu Category',
            'update_item' => 'Update Menu Category',
            'add_new_item' => 'Add New Menu Category',
            'new_item_name' => 'New Menu Type Name',
            'menu_name' => 'Menu Categories',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'menus-categories'],
        'show_in_rest' => true,
    ];

    $taxonomy_name = 'menu-categories'; // name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    $taxonomy_association = ['menus']; // post types to associate with this taxonomy

    register_taxonomy($taxonomy_name, $taxonomy_association, $args);
}
add_action('init', 'register_custom_taxonomies');