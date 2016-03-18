<?php get_header(); ?>
    <?php
        $category = get_queried_object();
    
        $args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'category'         => $category->term_id,
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
            <a class="media-left" href="/<?php echo $post->post_name ?>">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="" width="64" height="64"/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="/<?php echo $post->post_name ?>"><?php echo $post->post_title ?></a></h4>
                <?php echo $post->description ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>