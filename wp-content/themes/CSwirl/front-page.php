<?php get_header(); ?>
    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>
    <!-- <p> This is a front-page.php template.</p> -->

    <div class="pageContent" id="front-page">
            <?php get_template_part('components/content'); ?>
    </div>
    
<?php get_footer(); ?>