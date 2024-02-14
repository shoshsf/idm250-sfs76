
<footer> 
    <!-- <p>&copy; 2024 | idm250 </p> -->
    
    <h3>
        <?php wp_nav_menu([
        'theme_location' => 'footer',
        ]); ?>
    </h3>
    <h6 class="fontcolor_EBC089">&copy; <?php echo date('Y'); ?> | <?php bloginfo('name'); ?> | Samiha Shoshi</h6>

</footer>

<?php wp_footer(); ?>

</body>

</html>