<?php
/* Template Name: Page with Sidebar
 *
 * This custom page template includes a sidebar along with the main content area. It allows for a different page layout compared to the default template.
 * Use this template for pages that require additional navigational elements or widgets displayed in a sidebar.
 *
 * To assign this template to a page, select "Page with Sidebar" from the Template dropdown in the Page Attributes meta box in the WordPress editor.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
*/
  get_header(); ?>
    <h1>
        <?php echo get_the_title(); ?> <!---Gets title from page-->
    </h1>


  <div class="pageContent sidebarPageContent">
    
    <div class="content">
      <?php get_template_part('components/content'); ?>
    </div>
    <aside class="sidebar">
      <?php get_template_part('components/sidebar'); ?>
    </aside>
  </div>
  <?php get_footer(); ?>