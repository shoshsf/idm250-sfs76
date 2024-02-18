<?php

/* Template Name: Page with Menu */

 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>

    <div>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>

    </div>

    <?php
        $args = array(
            'post_type' => 'menu',
            'posts_per_page' => 10,
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            echo '<div class="entry-content">';
            the_content();
            echo '</div>';
        endwhile;
    ?>
    
    <p> This is a Custom Menu template.</p>

<?php get_footer(); ?>