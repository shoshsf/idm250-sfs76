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

add_action( 'init' , 'register_theme_menus'); 
