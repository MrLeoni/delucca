<?php
/**
 * Template name: Blog
 *
 * @package Agência_Delucca
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-6">
							<div class="content-wrapper">
								<?php
									while( have_posts() ): the_post();
										the_content();
									endwhile;
								?>
							</div>
						</div>
					</div>
					<?php get_template_part( 'template-parts/content', "blog" ); ?>
				</div>
			</section>
			<?php /*
			<section id="clients">
				<?php get_template_part( 'template-parts/content', "clients" ); ?>
			</section>
			*/ ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();