<?php
/*
 * Aby sa menu generovalo v sulade s bootstrapom
 */
require_once('wp_bootstrap_navwalker.php');

/*
 * Povoli pridanie obrazka ku "post-u"
 */
add_theme_support( 'post-thumbnails' ); 

function setup() {
    /*
     * Bude mozne pridavat si vlastne menu ku teme
     */
    register_nav_menus( array(
        'primary'   => __( 'Hlavne menu'),
    ) );
    
    add_post_type_support('post', 'excerpt');
}

function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

setup();