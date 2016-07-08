<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raymond-voyage
 *
 */

/* Template Name: Page Accueil */

get_header(); ?>

	<div id="primary" class="content-area">
		<section id="main" class="site-main main-accueil row container" role="main">
			<h4>Forfaits vedettes</h4>
			<?php $link = get_post_type_archive_link('forfait');
			
			?>
			

			<?php


				$args = array(
					'post_type' => 'forfait',
					'posts_per_page' => 2
				);
				$derniersForfaits = new WP_Query($args);

				if ( $derniersForfaits->have_posts() ) :
					while ( $derniersForfaits->have_posts() ) {
						$derniersForfaits->the_post();
						get_template_part( 'template-parts/content', 'forfaitresume' );
					}
				endif;

		?>
		</section><!-- #main -->
		<section id="article-recent" >
			<div class="site-main row container" role="main">
				<h4>Derniers articles</h4>
				<?php
				$args2 = array(
					'post_type' => 'post',
					'posts_per_page' => 3
				);
				$derniersArticles = new WP_Query($args2);
	
				if ( $derniersArticles->have_posts() ) :
					while ( $derniersArticles->have_posts() ) {
						$derniersArticles->the_post();
						get_template_part( 'template-parts/content', 'resume' );
					}
				endif;
	
				?>
			</div>
		</section><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
