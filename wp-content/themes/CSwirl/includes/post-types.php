<?php

/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */

function create_custom_post_type()
{
    // $post_type_name = 'portfolio';
    // $post_type_options = [
    //     'labels' => [
    //         'name' => __('Projects'),
    //         'singular_name' => __('Project'),
    //     ],
    //     'public' => true,
    //     'has_archive' => true,
    //     'menu_icon' => 'dashicons-portfolio',
    //     'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    //     'rewrite' => ['slug' => 'portfolio'],
    //     'show_in_rest' => true,

    // ];

    // register_post_type($post_type_name, $post_type_options);

    {
        $arg = [
            'labels' => [
                'name' => 'Menu',
                'singular_name' => 'MenuItem',
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'menu'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            // 'taxonomies' => ['project-categories'], // Name of custom taxonomy. Only need if you have a custom taxonomy
            'show_in_rest' => true,
        ];
        $post_type_name = 'menu';
    
        // Register Albums post type
        register_post_type($post_type_name, $arg);
    }
}
add_action('init', 'create_custom_post_type');
