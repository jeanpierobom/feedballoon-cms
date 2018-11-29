<?php  ?>
<div class="header">
  <!-- <?php the_custom_header_markup(); ?> -->

  <nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'feedballoon-theme' ); ?></button>
    <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
    ) );
    ?>
  </nav><!-- #site-navigation -->

  <div class="menupart">
    <ul>
      <li><a href="#">ABOUT US</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </div>
  <div class="main">
    <div class="title">
    <a href="#">
  <img src="<?php echo wp_get_attachment_image_src(28)[0];
 ?>" alt=""> </a>
 <h1>feedballoon</h1>
    </div>
    <div class="content">
      <p>A platform designed to encourage coworkers to give, request and receive instant feedback in order to cultivate empowered, collaborative, skilled and cross-functional teams. </p>
    </div>
    <div class="download">
      <div class="part1">
        <p>Downloaded here</p>

      </div>
      <div class="both">
        <div class="first">
          <a href="#">
        <img src="<?php echo wp_get_attachment_image_src(45)[0];
       ?>" alt=""> </a>
        </div>
        <div class="second">
          <a href="#">
        <img src="<?php echo wp_get_attachment_image_src(46)[0];
        ?>" alt=""> </a>
        </div>
      </div>



    </div>
  </div>
