<?php 
add_action('init','register_my_menus');

function register_my_menus() {
    
    register_nav_menus(array(
        
            'top-menu'=>_('Menu Principal'),
        
        
        
        ));
    
    
    
    
    
    
    
    
    
}


function add_menuclass($ulclass) {
return preg_replace('/<ul>/', '<ul class="hidden">', $ulclass, 1);
}
add_filter('wp_list_pages','add_menuclass');




?>






<?php
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

?>