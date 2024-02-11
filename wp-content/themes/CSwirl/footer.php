
<footer> 
    <!-- <p>&copy; 2024 | idm250 </p> -->
    <p>&copy; <?php echo date('Y'); ?> | <?php bloginfo('name'); ?></p>
    <?php wp_nav_menu([
        'theme_location' => 'footer',
    ]); ?>

</footer>

<?php wp_footer(); ?>

</body>

</html>