<?php

/* Template Name: Page with Menus */

 get_header(); ?>

    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>
    
    <div class="pageContent menuContent">
        <!-- <div class="cateDiv">
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
        </div> -->
         <!-- php get_template_part('components/menu-categories'); ?>  -->
        
        <?php

            $menus = new WP_Query([
                'post_type' => 'menus',
                'posts_per_page' => 20,
                // 'order' => 'DESC',
            ]);

            if ($menus->have_posts()) :
                while ($menus->have_posts()) : $menus->the_post();
                    echo '<div class="menuBox">';
                    echo '<h2 class="menuTitle">' . get_the_title() . '</h2>';
                    echo '<p class="menuDetail">' . get_the_content() . '</p>';
                    echo '</div>';        
                endwhile;
                wp_reset_postdata();
            endif;

        ?>
        <!-- <p> This is a Custom Menu template.</p> -->
    </div>
<?php get_footer(); ?>