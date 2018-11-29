SECTION-FOOTER
<div class="section-footer">

<!-- SOCIAL MEDIA ICONS -->
  <nav id="site-navigation" class="socialMedia-Icons">
    <button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Social Media', 'feedballoon-theme' ); ?></button>
    <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-2',
      'menu_id'        => 'secondary-menu',
    ) );
    ?>
  </nav><!-- SOCIAL MEDIA ICONS -->

</div>


</div>
