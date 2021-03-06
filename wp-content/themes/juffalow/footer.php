    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <ul class="footer-info">
                        <li>Matej <small>'juffalow'</small> Jellus</li>
                        <li><i class="fa fa-wordpress"></i>ordPress</li>
                        <li>2015 - 2017</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <span class="social">
                        <a href="https://www.facebook.com/juffalow.page"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/juffalow"><i class="fa fa-twitter"></i></a>
                        <a href="https://github.com/juffalow"><i class="fa fa-github"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/prettify/prettify.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.lazyload.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/blueimp-gallery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.blueimp-gallery.js"></script>

    <script type="text/javascript" charset="utf-8">
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
        !function ($) {
          $(function(){
            window.prettyPrint && prettyPrint();
          });
        }(window.jQuery);

        $(function() {
            $("img.lazy").lazyload({placeholder: "<?php echo get_template_directory_uri(); ?>/images/loader.gif"});
        });
    </script>
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    </body>
    </html>
