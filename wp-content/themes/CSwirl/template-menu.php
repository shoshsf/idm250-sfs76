<?php

/* Template Name: Page with Menu */

 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>

    <div class="cateDiv">
        <div class="cate"><a href="">Shakes</a></div>
        <div class="cate"><a href="">Fries</a></div>
        <div class="cate"><a href="">Burgers</a></div>
        <div class="cate"><a href="">Chicken</a></div>
        <div class="cate"><a href="">Hot Dogs</a></div>
        <div class="cate"><a href="">Salads</a></div>
        <div class="cate"><a href="">Sides</a></div>
        <div class="cate"><a href="">Smoothies</a></div>
        <div class="cate"><a href="">Drinks</a></div>
        <div class="cate"><a href="">View All</a></div>
    </div>
    
    <?php

    $menu = new WP_Query([
        'post_type' => 'menu',
        'posts_per_page' => 5,
        'order' => 'DESC',
    ]);

    if ($menu->have_posts()) :
        while ($menu->have_posts()) : $menu->the_post();
            echo '<h2>' . get_the_title() . '</h2> <br>';
            echo '<p>' . get_the_excerpt() . '</p>';
            // echo '<a href="' . get_the_permalink() . '">Read More</a>';
            echo '<hr>';        
        endwhile;
        wp_reset_postdata();
    endif;

    ?>
    <p> This is a Custom Menu template.</p>

<?php get_footer(); ?>