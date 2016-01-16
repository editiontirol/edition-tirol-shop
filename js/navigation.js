//
// Handles toggling the navigation menu for small screens and adds clickable menus on big screens.
//

(function($) {
  var container, button, menu

  container = document.getElementById('site-navigation');
  if(!container) {
    return
  }

  button = container.getElementsByTagName('button')[0];
  if('undefined' === typeof button) {
    return
  }

  menu = container.getElementsByTagName('ul')[0];

  // Hide menu toggle button if menu is empty and return early.
  if ('undefined' === typeof menu) {
    button.style.display = 'none'
    return
  }

  menu.setAttribute('aria-expanded', 'false');

  if (-1 === menu.className.indexOf('nav-menu')) {
    menu.className += ' nav-menu'
  }

  button.onclick = function() {
    if (-1 !== container.className.indexOf('toggled') ) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false')
      menu.setAttribute('aria-expanded', 'false')
    } else {
      container.className += ' toggled'
      button.setAttribute('aria-expanded', 'true')
      menu.setAttribute('aria-expanded', 'true')
    }
  };

  // Add .focus to Menu and Cart Dropdowns
  $(window).load(function() {

    $('.menu-item-has-children > a, .site-header-cart > li > a').click(function(event) {
      if($(this).siblings().length !== 0) {

        if(!$(this).parent().hasClass('focus') && $(window).width() >= 768) {
          event.preventDefault()
        }

        $(this).parent().addClass('focus').siblings().removeClass('focus')
      }
    });

    $(document).on('mouseup touchend', function (event) {
      if($(event.target).parents('.menu-item-has-children').length === 0) {
        $('.menu-item-has-children').removeClass('focus')
      }

      if($(event.target).parents('.site-header-cart > li').length === 0) {
        $('.site-header-cart > li').removeClass('focus')
      }
    });

  });

})(jQuery)
