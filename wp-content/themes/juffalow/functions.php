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

function use_sessions() {
    if( !session_id() ) {
        session_start();
    }
}

add_action('init', 'use_sessions');

function re_rewrite_rules() {
    global $wp_rewrite;
    //$wp_rewrite->author_base        = 'autor';
    //$wp_rewrite->search_base        = 'hladat';
    //$wp_rewrite->comments_base      = 'komentare';
    $wp_rewrite->pagination_base    = 'strana';
    $wp_rewrite->flush_rules();
}
add_action('init', 're_rewrite_rules');

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

function generate_token() {
    $token = md5(uniqid());
    $_SESSION['csrf_token'] = $token;
    return $token;
}

/**
 *
 * @param type $post_id
 */
function check_csrf_token($post_id) {
    if( !isset($_POST['token']) || !isset($_SESSION['csrf_token']) || $_POST['token'] !== $_SESSION['csrf_token'] ) {
        header('CSRF: r u f* kidding me?');
        wp_safe_redirect('/');
        die();
    }
}
add_action('pre_comment_on_post', 'check_csrf_token');

setup();
