<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand with_logo" href="<?php echo home_url(); ?>/">
          <span class="logo">Urturn</span><?php bloginfo('name'); ?>
      </a>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse collapse">
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
  </div>
</header>



