<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand urturn" href="<?php echo home_url(); ?>/">
        <strong><?php bloginfo('name'); ?></strong>
      </a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
        <div class="navbar-search pull-right">
          <?php get_template_part('templates/searchform'); ?>
        </div>
      </nav>
    </div>
  </div>
</header>
