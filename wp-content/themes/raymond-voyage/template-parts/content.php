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
                        <div class="col s12 m4 l4">
                            <div class="mini-post-info">
                                <?php
                                the_post_thumbnail('small');  /*******  IMAGE  *******/ ?>
                                <div class="text-mini-post">
                                  <p>Date: <?php echo get_the_date(); ?></p>
                                    <span class="infos"> Catégorie(s): </span>
                                    <div class="liens-post">
                                        <?php
                                        $categories = get_the_category();
                                        if($categories)
                                            ?>
                                        <?php foreach ($categories as $cat): ?>
                                            <li>
                                            <?php $url = get_category_link($cat->term_id); ?>
                                                <a class="call-to-action" href="<?php echo $url; ?>" >
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo $cat->name; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-article">
                        <div class="col s12 m8 l8">
                            <div class="text-article-info">
                               <h5><span>Par: </span><?php  the_author(); ?></h5>
                                    <div class="ligne-au-dessus">
                                        <?php  the_content(); /*******  CONTENU *******/ 
                                        $url = get_permalink(get_option('page_for_posts')); ?>
                                    </div>
                                <div class="liens-post">
                                    <a href=" <?php echo $url ?> " class="call-to-action "><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Retour au blogue</a>
                                </div>
                            </div>
                        </div>
                    </div>






	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //raymond_voyage_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
