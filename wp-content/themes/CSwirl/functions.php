
<?php

/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';

/**
 * Register custom post types
 */
require get_template_directory() . '/includes/post-types.php';

/**
 * Custom Helper functions
 */
require get_template_directory() . '/includes/helper.php';

// add sidebar and widget
function add_widgets()
{
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
    ]);
}
add_action('widgets_init', 'add_widgets'); ?>