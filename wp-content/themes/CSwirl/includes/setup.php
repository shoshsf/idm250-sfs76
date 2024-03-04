<?php

/*
* Enable support for Post Thumbnails (featured image) on posts and pages.
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/

add_theme_support('post-thumbnails');


// Add excerpt support to pages
add_post_type_support('page', 'excerpt');

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */





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
 
/**
 * @link https://codex.wordpress.org/Navigation_Menus
 * @return void
 */

function register_theme_menus()
{
    register_nav_menus(
        [
            'primary' => 'Primary Menu',
            '404-menu' => '404 Menu',
            'footer' => 'Footer Menu'
        ]
    );
}

add_action('init', 'register_theme_menus');

