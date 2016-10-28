<?php
/**
 * Template name: Contato
 *
 * @package Agência_Delucca
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="contact">
				<div class="content-wrapper clearfix">
					<div class="contact-content-box">
						<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile; // End of the loop.
						?>
					</div>
					<div class="map-box">
						<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ9TZyeRjGyJQRWyW3DQCdVBM&key=AIzaSyBdu0xeujht4gKhOxNl_6EPGq8IHsIYi4M" allowfullscreen></iframe>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();