<?php get_header(); ?>
    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>
    
    <div class="home-content">  <?php echo get_the_content();?> </div>

    <p> This is a front-page.php template.</p>

<?php get_footer(); ?>