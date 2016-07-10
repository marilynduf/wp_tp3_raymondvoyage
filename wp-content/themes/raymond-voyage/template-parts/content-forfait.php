<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_single() ) {
            the_title( '<h2 class="entry-title">', '</h2>' );
        } else {
            $linkSingle = esc_url( get_permalink() );
            the_title( '<h2 class="entry-title"><a href="' . $linkSingle . '" rel="bookmark">', '</a></h2>' );
        }

        if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">

            </div><!-- .entry-meta -->
            <?php
        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content article">


        <div class="mini-post">
            <div class="col s12 m6 l6">
                <div class="">
                    <?php
                    the_post_thumbnail('small');  /*******  IMAGE  *******/ ?>
                    
                    <div class="center">
                        <a href="#" class="btn button-forfait">Acheter ce forfait</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="text-article">
            <div class="col s12 m6 l6">
                <div class="titre-info-forfait">
                    
                    <h5>Détails</h5>
                    <?php get_template_part( 'template-parts/content', 'infoforfaitresume' ); ?>
                    <div>
                        
                        <h5>Description</h5>
                        <?php  the_content(); /*******  CONTENU *******/
                        $url = get_post_type_archive_link('forfait'); ?>
                    </div>
                    <div class="liens-post">
                        <a href=" <?php echo $url ?> " class="call-to-action "><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Retour aux forfaits</a>
                    </div>
                </div>
            </div>
        </div>






    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php //raymond_voyage_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
