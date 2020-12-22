<!DOCTYPE html>
<html lang="sk">
    <head>
        <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="keywords" content="java,php,sql,javascript,jquery,programovanie" />
        <meta name="description" content="<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>" />
        <meta name="robots" content="noindex, nofollow">

        <meta property=”og:site_name” content=”<?php echo get_bloginfo('name'); ?>” />
        <meta property=”og:title” content=”<?php if( is_front_page() && is_home() ) { echo get_bloginfo('name'); } else { echo $post->post_title; } ?>” />
        <meta property=”og:url” content=”<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>” />
        <meta property=”og:type” content=”<?php echo ( is_front_page() && is_home() ) ? 'website' : 'article'; ?>” />
        <meta property=”og:description” content=”<?php if( is_front_page() && is_home() ) { echo 'Poznamky a rozne materialy k programovaniu a ine veci, ktore ma zaujimaju.'; } else { echo $post->post_excerpt; } ?>” />

        <link rel="canonical" href="<?php if( is_front_page() && is_home() ) { echo get_home_url(); } else { echo get_permalink(); } ?>" />
        <link rel="author" href="https://plus.google.com/+MatejJellus" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

        <?php

            if( is_front_page() && is_home() ) {
                echo '<link rel="alternate" hreflang="en" href="http://en.juffalow.com" />';
            } else {
                $enLink = get_post_custom_values( 'alternate_en' );
                if( $enLink !== null ) {
                    echo '<link rel="alternate" hreflang="en" href="', $enLink[0], '" />';
                }

                $skLink = get_post_custom_values( 'alternate_sk' );
                if( $skLink !== null ) {
                    echo '<link rel="alternate" hreflang="sk" href="', $skLink[0], '" />';
                }
            }
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/prettify.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/prettify/prettify.js"></script>

    </head>
    <body onload="prettyPrint()">

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

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    /*'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',*/
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
    </nav>

            <!-- Begin page content -->
    <div class="container">

<div class="row spacer">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 pull-right">
        <nav class="bs-docs-sidebar">
            <ul id="sidebar" class="nav nav-stacked fixed">

            </ul>
        </nav>
    </div>
    <div class="col-lg-9 col-md-12 pull-right">
        <h2 class="theme-subheading" id="kde-co-ako">Kde, co, ako?</h2>
        <h4 class="theme-subheading" id="zermatt">Zermatt</h4>
        <p class="text-justify">
            Plan na tento den by mohol vyzerat nasledovne. Skusit to vydrzat v praci a tesit sa, ako z nej vypadneme. Byt predbezne zbaleny, mat vsetko pripravene a uz len kontrolovat ci je to naozaj vsetko.
            Ratam, ze niekedy vo vecernych hodinach by sme vystartovali. Ja osobne by som cestou tam <b>SRAL NA VSETKO</b>. Ideme sa zamerat na severske krajiny, primarne na Norsko. Takze staty ako Polsko, Litva, Lotyssko a Estonsko by som nejako neriesil.
        </p>
    </div>
</div>
<script>
    function createContentList() {
        var twig = [];
        var i = 0;
        var isFirst = true;
        var isFirstSubTheme = true;
        $(".theme-subheading").each(function() {
            if( $(this).prop("tagName") === "H2" ) {
                if( !isFirstSubTheme ) { twig[i++] = "</ul>"; isFirstSubTheme = true; }
                if( !isFirst ) { twig[i++] = "</li>"; }
                twig[i++] = "<li><a href=\"#";
                twig[i++] = $(this).prop("id");
                twig[i++] = "\">";
                twig[i++] = $(this).text();
                twig[i++] = "</a>";
                isFirst = false;
            }

            if( $(this).prop("tagName") === "H4" ) {
                if( isFirstSubTheme ) {
                    twig[i++] = "<ul class=\"nav nav-stacked\">";
                    isFirstSubTheme = false;
                }
                twig[i++] = "<li><a href=\"#";
                twig[i++] = $(this).prop("id");
                twig[i++] = "\">";
                twig[i++] = $(this).text();
                twig[i++] = "</a></li>";
            }
        });
        $("#sidebar").append(twig.join(''));
    }
    createContentList();
    $('body').scrollspy({
    target: '.bs-docs-sidebar',
    offset: 40
});
</script>
    </div>

    <footer class="footer">
        <div class="container">

        </div>
    </footer>
    </body>
    </html>
