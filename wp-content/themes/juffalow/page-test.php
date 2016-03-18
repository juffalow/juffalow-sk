<?php get_header(); ?>
<div class="row">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 pull-right">
        <nav class="bs-docs-sidebar">
            <ul id="sidebar" class="nav nav-stacked fixed">

            </ul>
        </nav>
    </div>
    <div class="col-lg-9 col-md-12 pull-right">
    <?php
        while ( have_posts() ) : the_post();
            echo '<h1>';
            the_title();
            the_date('j.m.Y', ' <small>', '</small>');
            echo '</h1>';
            the_content();
        endwhile;
    ?>
    </div>
</div>
<script>alert("som tu");
    function createContentList() {
        var twig = [];
        var i = 0;
        var isFirst = true;
        var isFirstSubTheme = true;
        $(".theme-subheading").each(function() {
            console.log("tagName : ");
            console.log($(this).prop("tagName"));


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
<?php get_footer(); ?>