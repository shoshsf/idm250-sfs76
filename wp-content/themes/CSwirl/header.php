<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> --> 
    <!-- <title php bloginfo('name');?> php wp_title();?></title> -->
    <title>
        <?php
            if (is_front_page() || is_home()) {
                bloginfo('name');
            } else {
                wp_title('', true, 'right');
            }
        ?>
    </title>
    <link rel="icon" href="https://samihashoshi.com/idm250/wp-content/uploads/2024/03/favicon-16x16-1.png">
    <?php wp_head(); ?>
</head>


<body  <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <?php get_template_part('components/main-header'); ?>
