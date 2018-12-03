<!-- Video background -->
<!-- <video autoplay muted loop>
  <source src="https://player.vimeo.com/external/213693891.hd.mp4?s=0a50ff987c31317fd58894a458e98ffef3985569&profile_id=119&oauth2_token_id=57447761&download=1" type="video/mp4">
  <img src="fallback_here" alt="feedballoon header">
</video>
 -->
<nav id="site-navigation" class="main-navigation">
  <span id="toggle-button"><i class="fas fa-bars" aria-label="mobile menu"></i></span>

  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
  ) );
  ?>
</nav><!-- #site-navigation -->

<div class="header-container">

  <div class="logo-container">
    <h1 class="screen-reader-text"><?php bloginfo('name')?></h1>
    <img class="logo-image" alt="feedballoon logo" src="<?php echo wp_get_attachment_image_src(37, 'large')[0];?>">
  </div>

  <div class="content">
    <p>A platform designed to encourage coworkers to give, request and receive instant feedback in order to cultivate empowered, collaborative, skilled and cross-functional teams. </p>
  </div>

  <div class="download-app">
    <div class="label">
      <span>Download</span>
    </div>
    <div class="icons">
      <div class="first">
        <a href="#"><img alt="apple store" src="<?php echo wp_get_attachment_image_src(31, 'small')[0];?>"></a>
      </div>
      <div class="second">
        <a href="#"><img alt="play store" src="<?php echo wp_get_attachment_image_src(29, 'small')[0];?>"></a>
      </div>
    </div>
  </div>
</div>
