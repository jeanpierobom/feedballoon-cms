<nav id="site-navigation" class="main-navigation">
  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
  ) );
  ?>
</nav><!-- #site-navigation -->
<h1><?php bloginfo('name')?></h1>
<img class="logo-image" src="<?php echo wp_get_attachment_image_src(28, 'large')[0];?>">
