<?php


function theme_scripts_and_styles()
{

//Enqueue a custom script
// wp_enqueue_script('custom-script', get_template_directory_uri(). '/js/custom-script.js', [ 'jquery'],'1.0.0', true);
wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

//Enqueue a custom style
// wp_enqueue_style('custom-style', get_template_directory_uri(). '/css/custom-style.js', [],'1.0.0', all);

wp_enqueue_style('idm-normalize', 'https://yarnpkg.com/en/package/normalize.css');
wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/main.css');


}


add_action( 'wp_enqueue_scripts' , 'theme_scripts_and_styles'); 
 

function register_theme_menus(){

    // string[] $locations = array () 
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
        '404-menu' => '404 Menu'
    ]);
}

// Enable featured images
add_theme_support('post-thumbnails');


// enable excerpt
add_post_type_support('page', 'excerpt');


// create custom post type called portfolio
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

    $post_type_name = 'menu';
    $post_type_options = [
        'labels' => [
            'name' => __('Menu'),
            'singular_name' => __('MenuItem'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'menu'],
        'show_in_rest' => true,
    ];

    register_post_type($post_type_name, $post_type_options);
}
add_action('init', 'create_custom_post_type');
