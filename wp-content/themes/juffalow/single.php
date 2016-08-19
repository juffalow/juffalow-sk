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

            comments_template( '', true );
        endwhile;
    ?>
    </div>
</div>
<?php get_footer(); ?>
