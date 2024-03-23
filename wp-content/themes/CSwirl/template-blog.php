<?php

/* Template Name: Page with Blog */

 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>
    <div class="pageContent blogContent">
        
        <?php get_template_part('components/blog-categories'); ?>
        
        <?php

            $blogPost= new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 5,
                'order' => 'DESC',
            ]);

            if ($blogPost->have_posts()) :
                while ($blogPost->have_posts()) : $blogPost->the_post();
                    echo '<a class="blogPostDivLink" href="' . get_the_permalink() . '">';
                    echo '<div class="blogPostDiv">';
                    echo '<p class="blogDate">'. get_the_date() . '</p> <br>';
                    echo '<h2 class="blogTitle">' . get_the_title() . '</h2> <br>';
                    echo '<p class="blogDesc">' . get_the_excerpt() . '</p>';
                    echo '</div>';
                    echo '</a>';  
        
                endwhile;
                wp_reset_postdata();
            endif;

        ?>
        <!-- <p> This is a Custom Blog template.</p> -->
    </div>   
<?php get_footer(); ?>