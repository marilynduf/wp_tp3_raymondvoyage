<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 */

?>
<div class="article-accueil">
    <div class="col s12 m7 l4">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content post-extrait">

                    <?php $linkSingle = esc_url( get_permalink() ); ?>
                        <div class="date">
                            <?php echo get_the_date(); ?>
                        </div >
                        <div class="crop-container">
                            <a href=" <?php echo $linkSingle ?>" > <?php the_post_thumbnail('large'); ?> </a>
                        </div>
                        <div class="text-post-extrait">
                            <a href=" <?php echo $linkSingle ?>" ><h3><?php the_title(); ?> </h3></a>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="ligne">

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

</div>

