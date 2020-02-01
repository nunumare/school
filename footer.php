    <footer class="site-footer">
        <nav class = "site-nav">
            <?php 
            $args = array(
                'theme_location' => 'footer'
            );
            ?>
            <?php wp_nav_menu($args); ?>
        </nav>
        <p><?php bloginfo('name'); ?> - &copy; <?php the_time('F j, Y');?></p>
    </footer>
</div><!-- contatiner -->
<?php wp_footer(); ?>

</body>
</html>

