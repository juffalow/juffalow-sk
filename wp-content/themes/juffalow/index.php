<?php get_header(); ?>
<?php if ( is_front_page() ) { ?>

<?php } ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 article-list">
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query_args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 10,
                  'paged' => $paged,
                  'page' => $paged
             );
             $the_query = new WP_Query($query_args);
             while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
        </div>
        <?php
        $pagination_args = array(
          'base'            => get_pagenum_link(1) . '%_%',
          'format'          => 'strana/%#%',
          'total'           => $the_query->max_num_pages,
          'current'         => $paged,
          'show_all'        => False,
          'end_size'        => 1,
          'mid_size'        => 1,
          'prev_next'       => True,
          'prev_text'       => __('&laquo;'),
          'next_text'       => __('&raquo;'),
          'type'            => 'array',
          'add_args'        => false,
          'add_fragment'    => ''
        );
        $paginate_links = paginate_links($pagination_args);

        if( count($paginate_links) > 0 ) { ?>
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php foreach( $paginate_links AS $page ) {
                        echo "<li>", $page, "</li>";
                    } ?>
                </ul>
            </nav>
        </div>
        <?php } ?>
</div>

<?php get_footer(); ?>
