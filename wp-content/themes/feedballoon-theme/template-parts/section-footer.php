SECTION-FOOTER
<div class="section-footer">

  <div class="footer-socialMedia">
  <h3 class="subtitle-sociaMedia">FOLLOW US</h3>

    <!-- SOCIAL MEDIA ICONS -->
    <nav id="site-navigation" class="socialMedia-Icons">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'secondary-menu',
      ) );
      ?>
    </nav><!-- SOCIAL MEDIA ICONS -->
  </div>

  <div class="footer-stores">
    <span class="downloadApp">DOWNLOAD</span>

    <div class="stores-logos-container">
      <img class="logo-appStore logo-stores" src="<?php echo wp_get_attachment_image_src(29, 'large')[0];?>">
      <img class="ogo-playStore logo-stores" src="<?php echo wp_get_attachment_image_src(31, 'large')[0];?>">
    </div>

    <div class="footer-info">
      <img class="logo-footer" src="<?php echo wp_get_attachment_image_src(36, 'large')[0];?>">
    </div>

    <div class="footer-rodape">
    <p class="copyright rodape-text">Copyright © 2018. All rights reserved.</p>
    <p class="footer-location rodape-text">Vancouver, Canada</p>

    </div>

  </div>




</div> <!-- section-footer - END -->
