<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agência_Delucca
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="archive">
				<div class="container">
					<?php
					if ( have_posts() ) : ?>
			
						<header class="page-header">
							<?php	the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
						</header><!-- .page-header -->
			
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif;
					?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
