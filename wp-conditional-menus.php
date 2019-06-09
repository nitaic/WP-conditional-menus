<?php

/**
 * Primary Nav Menu arguments
 * @return array
 */
function primarymenu_args()
{

  // Declare vars
  $slug = '';
  $locationMainMenu = '';

  $args = array(
    'fallback_cb' => false,
    'menu_class' => 'nav',
    'container' => false,
    'depth' => 2,
    'walker'            => new \App\wp_bulma_navwalker(),
    'items_wrap'      => '<ul class="navbar-end menu">%3$s</ul>'
  );

  // check if is location
  $location = App::isLocation();

  if ($location) {
    // get slug of location to use for selecting correct menu
    $slug = sanitize_title($location[0]->post_title);

    if ($slug) {
      // check if there is corresponding location menu
      $locationMainMenu = wp_get_nav_menu_object($slug . "-main-menu");
    }

    if ($locationMainMenu) {
      // add menu selection using slug to args
      $args["menu"] = $slug . "-main-menu";
      return $args;
    } else {
      // if no location menu return nothing. Will just show no menu
      return false;
    }
  } else {
    // use menu assigned to Primary Navigation menu position (sitewide header menu)
    $args["theme_location"] = "primary_navigation";
    return $args;
  }
}
