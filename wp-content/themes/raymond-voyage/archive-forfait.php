<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

get_header(); ?>

    <div id="primary" class="content-area container">
        <h2><span>Forfaits</span></h2>
        <main id="main" class="site-main row" role="main">

            <?php
            if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php

                    the_archive_description( '<h3 class="taxonomy-description">', '</h3>' );
                    ?>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                
                    get_template_part( 'template-parts/content', 'forfaitresume');

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
        <div>
            <button>Forfaits plus anciens</button>
            <button>Forfaits plus recents</button>
        </div>
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
