<?php get_header(); ?>
<div class="container">
<div class="row">
    <div class="col-lg-3 col-lg-push-9 col-md-12">
        <nav class="bs-docs-sidebar">
            <ul id="sidebar" class="nav nav-stacked fixed">

            </ul>
        </nav>
    </div>
    <div class="col-lg-9 col-lg-pull-3 col-md-12">
    <?php
        while ( have_posts() ) : the_post();
            echo '<h1>';
            the_title();
            the_date('j.m.Y', ' <small>', '</small>');
            echo '</h1>';
            the_content();

            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID), 'orderby' => 'rand' ) );

            if( $related ) {
                ?>
                <h4 class="theme-subheading" id="podobne-prispevky">Podobné príspevky</h4>
                <div class="row">
                <?php
                foreach( $related as $post ) { setup_postdata($post); ?>
                    <div class="col-md-6 col-xs-12">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h5><?php the_title(); ?></h5></a>
                        <p><?php the_excerpt() ?></p>
                        <p class="text-right"><a href="<?php the_permalink() ?>">Čítať viac</a></p>
                    </div>
                <?php } wp_reset_postdata(); ?>
                </div>
                <?php
            }
            comments_template( '', true );
        endwhile;
    ?>
    </div>
</div>
<?php get_footer(); ?>
