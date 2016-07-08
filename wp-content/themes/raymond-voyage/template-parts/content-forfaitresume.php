<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

?>
<div class="col s12 m6 l6">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content post-extrait">

            <div class="crop-container-forfait-resume">
                <?php the_post_thumbnail('small');  /*******  IMAGE  *******/ ?>
            </div>

            <div class="text-post-extrait">
                <h3><?php the_title(); ?> </h3>


                

                    <?php get_template_part( 'template-parts/content', 'infoforfaitresume' ); ?>

                

            <div class="">
                <?php $linkSingle = esc_url( get_permalink() ); ?>
                <div class="liens-post">
                    <a href=" <?php echo $linkSingle ?> " class="call-to-action"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Lire la suite</a>
                </div>
            </div>
        </div>


        <footer class="entry-footer">
            <?php //raymond_voyage_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </article><!-- #post-## -->

</div><!-- .entry-content -->


