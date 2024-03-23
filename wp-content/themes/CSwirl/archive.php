<?php get_header(); ?>

<div class="pageContent .blogContent">
    <div class="cateDiv">

        <!-- <div class="cate">
            <a href="https://idm250.local/blog/ "> <- Back to Main </a>
        </div> -->

        <div class="cate">
            <a href="https://samihashoshi.com/idm250/blog/ "> <- Back to Main </a>
        </div> 
        
    </div>

    <?php 
    
    // echo '<h1>' . single_cat_title('', false) . '</h1>';

    //output the title and the archive description and posts

        if (have_posts()):
            while(have_posts()) : the_post();
                echo '<a class="blogPostDivLink" href="' . get_the_permalink() . '">';
                echo '<div class="blogPostDiv">';
                echo '<p class="blogDate blogPostContent">'. get_the_date() . '</p> <br>';
                echo '<h2 class="blogTitle blogPostContent">' . get_the_title() . '</h2> <br>';
                echo '<p class="blogDesc blogPostContent">' . get_the_excerpt() . '</p>';
                echo '</div>';
                echo '</a>';     
            endwhile;

        else:
            echo '<p> No Content Found </p>';

        endif;
    ?>



</div>
<?php get_footer(); ?>