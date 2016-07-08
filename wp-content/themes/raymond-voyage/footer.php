<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?>

        </div><!-- #content -->

            <div class="background">

                <footer id="colophon" class="site-footer container row" role="contentinfo">

                    <div class="site-info col l4">

                        <div class="site-branding">
                            <?php
                            if ( is_front_page() && is_home() ) : ?>
                                <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></div>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></p>
                                <?php
                            endif;

                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"></p>
                                <?php
                            endif; ?>
                        </div><!-- .site-branding -->

                        <p class="credit">Fait par: <span>Marilyn Dufour<span></p>
                        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'raymond-voyage' ), 'raymond-voyage'); ?>
                    </div><!-- .site-info -->

                    <div class="col l4">
                        <h4><span>Suivez-nous</span></h4>
                        <a href="#"><i class="fa fa-facebook fa-3x " aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-3x " aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-tripadvisor fa-3x " aria-hidden="true"></i></a>
                        
                    </div>

                    <div class="nous-joindre col l4">
                        <h4><span>Nous joindre</span></h4>
                        <p><a href="tel:418 514-1234">Tel: 418 514-1234</a></p>
                        <p><a href="mailto:info@raymondvoyage.ca?Subject=Bonjour!" target="_top">info@raymondvoyage.ca</a></p>
                    </div>
                </footer><!-- #colophon -->
            </div>
        </div><!-- #page -->

        <?php wp_footer(); ?>

    </body>

</html>
