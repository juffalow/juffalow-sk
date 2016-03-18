<?php get_header(); ?>
<?php if ( is_front_page() ) { ?>
<div class="jumbotron">
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
        <p class="pull-right">juffalow</p>
    </div>
</div>
<?php } ?>
<div class="container">
    <?php
        $category = get_queried_object();
    
        $args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'category'         => '',
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
	'suppress_filters' => true );
        
        $posts_array = get_posts( $args );
        ?>
<div class="row">
    <div class="col-md-12">
        <?php
        foreach( $posts_array AS $post ) {?>
        <div class="media">
            <?php if( ($imgSrc = wp_get_attachment_url( get_post_thumbnail_id($post->ID) )) != null ) { ?>
                <a class="media-left" href="/<?php echo $post->post_name ?>">
                    <img src="<?php echo $imgSrc; ?>" alt="" width="128" height="auto"/>
                </a>
            <?php } ?>
            
            <div class="media-body">
                <h3 class="media-heading"><a href="/<?php echo $post->post_name ?>"><?php echo $post->post_title ?></a></h3>
                <p class="text-justify"><?php echo $post->post_excerpt; ?></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
    
<?php get_footer(); ?>