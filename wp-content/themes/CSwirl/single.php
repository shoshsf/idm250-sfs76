<!--To target Blog Posts--->
<?php get_header(); ?>
    <!-- <h1>
        php echo get_the_title(); ?>
    </h1> -->
     <!-- <p> This is a single.php template.</p>  -->


    <div class="cateDiv">
        <!-- <div class="cate">
            <a href="https://idm250.local/blog/ "> <- Back to Main </a>
        </div> -->
         <div class="cate">
            <a href="https://samihashoshi.com/idm250/blog/ "> <- Back to Main </a>
        </div>
    </div>
    
    <div class="blogInner-content pageContent">
        <?php get_template_part('components/content'); ?>
    </div>
     
    
<?php get_footer(); ?>