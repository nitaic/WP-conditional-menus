# WordPress-conditional-menus

Function to build menu args which loads custom menu if page has been "assigned" to a location.

Using ACF relationship fields and creating a custom post type "locations", pages can be assigned to a location.

If a page has been assigned a location, this function checks if there is a menu with matching slug of location. If there is no match it defaults to loading the menu assigned to the Primary Navigation menu position.
