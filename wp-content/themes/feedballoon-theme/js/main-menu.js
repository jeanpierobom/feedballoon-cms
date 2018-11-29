jQuery(document).ready(function($) {

  // Show or hide the menu
  $('#toggle-button').on('click', () => {
    //$('.menu-main-menu-container').slideToggle();
    $('#primary-menu').slideToggle();
  });

  function hideMenu() {
    console.log($('#toggle-button').css('display'));

    // Initially hidden
    if ($('#toggle-button').css('display') != 'none') {
      $('#primary-menu').hide();
    } else {
      if ($('#primary-menu').css('display') == 'none') {
        $('#primary-menu').show();
      }
    }
  }

  hideMenu();
  $(window).resize(hideMenu);
});
