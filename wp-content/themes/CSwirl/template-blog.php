<?php

/* Template Name: Page with Blog */

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

    $query = new WP_Query([
        'post_type' => 'blog',
        'posts_per_page' => 5,
        'order' => 'DESC',
    ]);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            echo '<h2>' . get_the_title() . '</h2> <br>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_the_permalink() . '">Read More</a>';
            echo '<hr>';        
        endwhile;
        wp_reset_postdata();
    endif;

    ?>
    <p> This is a Custom Blog template.</p>

<?php get_footer(); ?>