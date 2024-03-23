<?php get_header(); ?>

    
    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>
    <div class="pageContent">
        <!-- <p> This is a page.php template.</p> -->
        
            <?php get_template_part('components/content'); ?>
        
    </div>       
        

<?php get_footer(); ?>