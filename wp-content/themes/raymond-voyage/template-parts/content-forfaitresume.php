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

        <div class="entry-content post-extrait margin-bottom">
            <?php $linkSingle = esc_url( get_permalink() ); ?>

            <div class="crop-container-forfait-resume">
                <a href=" <?php echo $linkSingle ?> " class="call-to-action overlay">
                    <div class="masque"></div>
                </a>

                <div class="img"><?php the_post_thumbnail('small'); ?></div>


            </div>

            <div class="text-post-extrait">

               <a href="<?php echo $linkSingle ?>"> <?php the_title(); ?> </a>

                <a href=" <?php echo $linkSingle ?> " class="call-to-action"></a>
                

                <?php get_template_part( 'template-parts/content', 'infoforfaitresume' ); ?>


            </div>

        </div>



    </article><!-- #post-## -->

</div><!-- .entry-content -->


