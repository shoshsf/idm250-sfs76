<?php get_header('simple'); ?>


<div class="errorContent">
    <img src="wp-content\themes\CSwirl\dist\imgs\404Page\errorCharacter.png" alt="#" id="errorCharacter">
    <h2 class="errorContentText" >"Uh-oh! Hot dog, you've wandered into the land of lost links!"</h2>

    <h3 class="homeBtn">
        <?php wp_nav_menu([
         'theme_location' => '404-menu'
        ]); ?> 
    </h3>

    <p class="errorContentText ">Looks like this page has gone on a bun-dini disappearing act. Fear not, brave seeker of bytes! Head back to the homepage to relish in the right flavor or mustard up the courage to explore another tasty corner of our site. Our apologies for this digital sausage link gone astray – we'll make sure it's back grilling in no time. Thanks for your patience, and keep the virtual ketchup flowing!</p>




</div>

<!-- ?php get_footer(); ?> -->
