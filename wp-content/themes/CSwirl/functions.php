<?php

function theme_scripts_and_styles()
{


//Enqueue a custom script
// wp_enqueue_script('custom-script', get_template_directory_uri(). '/js/custom-script.js', [ 'jquery'],'1.0.0', true);
wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

//Enqueue a custom style
// wp_enqueue_style('custom-style', get_template_directory_uri(). '/css/custom-style.js', [],'1.0.0', all);
wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/main.css');

}


 add_action('wp_enqueue_script' , 'theme_scripts_and_styles'); 
 
