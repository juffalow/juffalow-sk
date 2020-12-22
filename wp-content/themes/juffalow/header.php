<!DOCTYPE html>
<html lang="sk">
    <head>
        <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php
        if( is_front_page() && is_home() ) {
            $description = 'Programátor, IT nadšenec, Web Developer, Blogger, cestovateľ a milovník jedla';
            $title = get_bloginfo('name');
            $image = 'https://www.juffalow.com/wp-content/uploads/2015/11/juffalow.png';
            $page = get_query_var('strana', 1);
            $url = get_home_url();
            $url .= ($page > 1) ? "?strana=$page" : '';
        } else if( is_category() ) {
            $description = category_description();
            $title = single_cat_title('', false) . ' | ' . get_bloginfo('name');
            $image = 'https://www.juffalow.com/wp-content/uploads/2015/11/juffalow.png';
            $page = get_query_var('strana', 1);
            $category = get_term( get_query_var('cat'), 'category' );
            /* so mad at this solution but :-( */
            $url = str_replace('/./', '/', esc_url(get_term_link($category->term_id, 'category')));
            $url .= ($page > 1) ? "?strana=$page" : '';
        } else {
            $description = $post->post_excerpt;
            $title = $post->post_title;
            $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $image = $image == null ? 'https://www.juffalow.com/wp-content/uploads/2015/11/juffalow.png' : $image;
            $url = get_permalink();
        }
        ?>

        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="robots" content="index, follow">

        <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:url" content="<?php echo $url; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="<?php echo $image; ?>" />

        <meta name="twitter:site" content="@juffalow" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />
        <meta name="twitter:description" content="<?php echo $description; ?>" />
        <meta name="twitter:image" content="<?php echo $image; ?>" />

        <link rel="canonical" href="<?php echo $url; ?>" />
        <link rel="author" href="https://plus.google.com/+MatejJellus" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?v=1.0.4">

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
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css?v=1.0.1" rel="stylesheet">
        <!-- <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/prettify.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.css" rel="stylesheet">

        <script src="<?php echo get_template_directory_uri(); ?>/js/webanalytics.js"></script>
        <script>
          if( typeof ga !== "undefined" ) {
            ga('set', 'contentGroup1', 'slovak');
            <?php
            if(is_front_page() ) {
                echo "ga('set', 'contentGroup2', 'domovska-stranka');\n";
            } else if( basename(get_permalink()) === 'kontakt' ) {
                echo "ga('set', 'contentGroup2', 'kontakt');\n";
            } else {
                $categories = get_the_category($post->ID);
                echo "ga('set', 'contentGroup2', '", $categories[0]->slug, "');\n";
            }?>
            ga('send', 'pageview');
          }
        </script>
        <?php wp_head(); ?>
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

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/juffalow.page"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/juffalow"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://github.com/juffalow"><i class="fa fa-github"></i></a></li>
                <?php if( is_front_page() && is_home() ) { ?>
                    <li><a href="http://en.juffalow.com" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                <?php } else if( $enLink !== null ) {?>
                    <li><a href="<?php echo $enLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/english.png" alt="english language" width="32" /></a></li>
                <?php } else if( $skLink !== null ) { ?>
                    <li><a href="<?php echo $skLink[0]; ?>" style="padding-top: 10px; padding-bottom: 10px;"><img src="/wp-includes/images/slovak.png" alt="slovak language" width="32" /></a></li>
                <?php } ?>
            </ul>
			</div>
        </div>
    </nav>
