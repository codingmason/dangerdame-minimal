</div><!-- /.container -->

    <nav>
        <ul class="archive-pagination">
                <li><?php echo paginate_links( ); ?></li>
        </ul>
    </nav>


    <footer class="blog-footer">
            <h2 class="back-to-top">back to top</h2>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/menu-slideout.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/back-to-top.js">></script>
    <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>
    <script type="text/php"> <?php wp_head();?> </script>
    <script type="text/php"> <?php wp_footer(); ?> </script>
    </body>
</html>
