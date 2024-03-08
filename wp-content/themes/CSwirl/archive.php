<?php get_header(); ?>

<?php 

echo '<h1>' . single_cat_title('', false) . '</h1>';

//output the title and the archive description and posts

if (have_posts()):
    while(have_posts()) : the_post();
        echo '<h2>' . get_the_title() . '</h2> <br>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '<a href="' . get_the_permalink() . '">Read More</a>';
        echo '<hr>';     
    endwhile;

else:
    echo '<p> No Content Found </p>';

endif;

?>

<?php get_footer(); ?>