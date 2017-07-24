<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>
<section id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-6">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'fallback_cb' => '',
                        'menu_id' => 'footer-menu',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-6">
                <ul class="copyright">
                    <li>&copy; Crafted by Hilary Barron. Site by <a href="http://www.designgarage.co.nz/" target="_blank">Design Garage</a></li>
                    <li class="facebook"><a href="https://www.facebook.com/Craftedbyhilary/" class="fa fa-facebook-square" target="_blank"></a></li>
                    <li class="insta"><a href="#" class="fa fa-instagram" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>