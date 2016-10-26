<?php
/**
 * Template name: Blog
 *
 * @package Agência_Delucca
 */
 
 $blog_query_args = array(
	"post_type"	=> "post",
 );
 
 $blog_query = new WP_Query( $blog_query_args );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="single-page">
				<div class="container">
				<?php
					if ( $blog_query->have_posts() ) :
					
						/* Start the Loop */
						while ( $blog_query->have_posts() ) : $blog_query->the_post();
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