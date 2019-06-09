# WP-conditional-menus
Useful to load a particular menu based on a condition.

For example, lets say you want to be able to set an individual custom menu for any page marked as a "location". You could add an ACF field to all pages. If that page has the ACF field as set to true, then this logic builds the wp_nav_menu() $args to load a menu based on menu slug. In this instance the menu slug must match the page slug.

This is just one way to set the $args. Anything is possible.

Can be used like so:
```
wp_nav_menu(custom_menu_args());
```

