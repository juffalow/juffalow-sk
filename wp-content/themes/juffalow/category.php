<?php get_header(); ?>
<div class="container">
    <?php
        $category = get_queried_object();

        $paged = get_query_var('strana', 1);

        $args = array(
        	'posts_per_page'   => 7,
            'paged'            => $paged,
            'page'             => $paged,
        	'cat'              => $category->term_id,
        	'orderby'          => 'post_date',
        	'order'            => 'DESC',
        	'include'          => '',
        	'exclude'          => '',
        	'meta_key'         => '',
        	'meta_value'       => '',
        	'post_type'        => 'post',
        	'post_mime_type'   => '',
        	'post_parent'      => '',
        	'post_status'      => 'publish',
        	'suppress_filters' => true
        );
?>

<div class="row">
    <div class="col-md-12">
        <?php
        $the_query = new WP_Query($args);
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
       <?php
       if( !$the_query->have_posts() ) {
           echo "<div class=\"alert alert-info\" role=\"alert\"><b>Prepáč!</b> V tejto kategórii sa zatiaľ nenachádza žiadny článok.</div>";
       }
       ?>
       <?php
       $pagination_args = array(
          'base'            => remove_query_arg('strana', get_pagenum_link(1)) . '%_%',
          'format'          => '?strana=%#%',
          'total'           => $the_query->max_num_pages,
          'current'         => $paged,
          'show_all'        => false,
          'end_size'        => 1,
          'mid_size'        => 2,
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
</div>
<?php get_footer(); ?>
