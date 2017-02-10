<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 article-list">

        <?php while ( have_posts() ) : the_post(); ?>
            <div class="media">
                <?php if( has_post_thumbnail() ) { ?>
                    <a class="media-left">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="128" height="auto" />
                    </a>
                <?php } ?>
                <div class="media-body">
                    <a href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="media-heading">', '</h3>' ); ?></a>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; ?>

        <?php
            if( !have_posts() ) {
                echo "<div class=\"alert alert-info\" role=\"alert\"><b>Prepáč!</b> V tejto kategórii sa zatiaľ nenachádza žiadny článok.</div>";
            }
        ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
