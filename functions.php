<?php 
add_action('init','register_my_menus');

function register_my_menus() {
    
    register_nav_menus(array(
        
            'top-menu'=>_('Menu Principal'),
            'footer1'=>_('Pie 1'),
            'footer2'=>_('Pie 2'),
        ));}


if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );







?>