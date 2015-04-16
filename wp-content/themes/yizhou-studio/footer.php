                <!-- End Main Content -->
            </div>

            <footer>
                <nav class="footer-links">
                    <ul>
                        <li>
                            <a href="<?=site_url()?>/contact/" title="About The Maker">About The Maker</a>
                        </li>
                        <li>
                            <a href="<?=site_url()?>/contributors/" title="Contributors">Contributors</a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>

        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="<?=get_stylesheet_directory_uri()?>/bower_components/jquery/dist/jquery.js"></script>
        <script src="<?=get_stylesheet_directory_uri()?>/bower_components/respond/dest/respond.min.js"></script>
        <script src="<?=get_stylesheet_directory_uri()?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- endbower -->
        <!-- endbuild -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        -->
        <!-- endbuild -->

        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="<?=get_stylesheet_directory_uri()?>/scripts/main.js"></script>
        <script src="<?=get_stylesheet_directory_uri()?>/scripts/artTemplate.js"></script>
        <!-- endbuild -->
        <?php wp_footer(); ?>
</body>
</html>
