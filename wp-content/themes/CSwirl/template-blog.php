<?php

/* Template Name: Page with Blog */

 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>

    <div class="cateDiv">
        <div class="cate">
            <a href="https://idm250.local/category/promotions/ "> Promotions </a>
        </div>

        <div class="cate">
            <a  class="homeBtn" href="https://idm250.local/category/new-items/ "> New Menu Items</a>
        </div>

    </div>
    
    <?php

    $blogPost= new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 5,
        'order' => 'DESC',
    ]);

    if ($blogPost->have_posts()) :
        while ($blogPost->have_posts()) : $blogPost->the_post();
            echo '<a href="' . get_the_permalink() . '">';
            echo '<p>'. get_the_date() . '</p> <br>';
            echo '<h2>' . get_the_title() . '</h2> <br>';
            echo '<p>' . get_the_excerpt() . '</p>';
            // echo '<a href="' . get_the_permalink() . '">Read More</a>';
            echo '<hr>'; 
            echo '</a>';       
        endwhile;
        wp_reset_postdata();
    endif;

    ?>
    <p> This is a Custom Blog template.</p>

<?php get_footer(); ?>