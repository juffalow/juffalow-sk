<!DOCTYPE html>
<html lang="sk">
    <head>
        <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="keywords" content="java,php,sql,javascript,jquery,programovanie" />
        <meta name="description" content="<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>" />
        <meta name="robots" content="index, follow">

        <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php if( is_front_page() && is_home() ) { echo get_bloginfo('name'); } else { echo $post->post_title; } ?>" />
        <meta property="og:url" content="<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>" />
        <?php $imgSrc = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <meta property="og:image" content="<?php echo ($imgSrc != null) ? $imgSrc : 'http://www.juffalow.com/wp-content/uploads/2015/11/juffalow.png'; ?>" />

        <meta name="twitter:site" content="@juffalow" />
        <meta name="twitter:title" content="<?php if( is_front_page() && is_home() ) { echo get_bloginfo('name'); } else { echo $post->post_title; } ?>" />
        <meta name="twitter:description" content="<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>" />
        <meta name="twitter:image" content="<?php echo ($imgSrc != null) ? $imgSrc : 'http://www.juffalow.com/wp-content/uploads/2015/11/juffalow.png'; ?>" />


        <link rel="canonical" href="<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>" />
        <link rel="author" href="https://plus.google.com/+MatejJellus" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <?php

            if( is_front_page() && is_home() ) {
                echo '<link rel="alternate" hreflang="en" href="http://en.juffalow.com" />';
				echo '<link rel="alternate" hreflang="sk" href="http://www.juffalow.com" />';
            } else {
                $enLink = get_post_custom_values( 'alternate_en' );
                if( $enLink !== null ) {
                    echo '<link rel="alternate" hreflang="en" href="', $enLink[0], '" />';
					echo '<link rel="alternate" hreflang="sk" href="', get_permalink(), '" />';
                }

                $skLink = get_post_custom_values( 'alternate_sk' );
                if( $skLink !== null ) {
                    echo '<link rel="alternate" hreflang="sk" href="', $skLink[0], '" />';
					echo '<link rel="alternate" hreflang="en" href="', get_permalink(), '" />';
                }
            }
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/prettify.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.css" rel="stylesheet">

        <script src="<?php echo get_template_directory_uri(); ?>/js/webanalytics.js"></script>
        <script>
          if( typeof ga !== "undefined" ) {
            ga('set', 'contentGroup1', 'slovak');
            <?php
            if(is_front_page() ) {
                echo "ga('set', 'contentGroup2', 'domovska-stranka');";
            } else if( basename(get_permalink()) === 'kontakt' ) {
                echo "ga('set', 'contentGroup2', 'kontakt');";
            } else {
                $categories = get_the_category($post->ID);
                echo "ga('set', 'contentGroup2', '", $categories[0]->slug, "');";
            }?>
            ga('send', 'pageview');
          }
        </script>
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                       <span>www.</span>juffalow<span>.com</span>
                </a>
            </div>
			<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => '',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>

            <?php if( is_front_page() && is_home() ) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://en.juffalow.com" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                    </ul>
            <?php } else if( $enLink !== null ) {?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $enLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                    </ul>
            <?php } else if( $skLink !== null ) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $skLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/slovak.png" alt="slovak language" width="32" /></a></li>
                    </ul>
            <?php } ?>
			</div>
        </div>
    </nav>
