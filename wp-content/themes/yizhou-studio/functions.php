<?php
add_action('init', function(){
    
    add_theme_support('post-thumbnails');
    
    add_image_size('home-banner', 904, 362, true);
    add_image_size('ad-home-banner', 111, 364, true);
    add_image_size('list-thumbnail', 360, 264, true);
    add_image_size('ad-content-side', 143, 468, true);
    
    register_nav_menu('main-nav', 'Main Navigation');
    
});

/**
 * add "active" class to current menu item
 */
add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );
function additional_active_item_classes($classes = array(), $menu_item = false){
    if(in_array('current-menu-item', $menu_item->classes) || in_array('current-post-ancestor', $menu_item->classes) || in_array('current-page-ancestor', $menu_item->classes)){
        $classes[] = 'active';
    }
    return $classes;
}
