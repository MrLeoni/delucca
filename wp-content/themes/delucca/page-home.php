<?php
/**
 * Template name: Home
 *
 * @package Agência_Delucca
 */
 
// Get page thumbnail and use as background image
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, "full", true);
 
// Get ACF Fields
// Home Banner
$home_banner_text = get_field("home-banner-text");

// Imagem ao lado do texto
$home_content_img = get_field("home-content-img");

// Contato
$home_contact_img = get_field("home-contact-img");
$home_contact_text = get_field("home-contact-text");

// linear-gradient(rgba(0,174,239,0.5), rgba(0,174,239,0.5)),


get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
			<section id="home-banner" class="parallax" data-speed="10" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
				<div class="container">
					<div class="home-banner-text ">
						<?php echo $home_banner_text; ?>
					</div>
				</div>
			</section>
			<section id="how-work">
				<div class="container">
					<?php get_template_part( 'template-parts/content', "how_work" ); ?>
				</div>
			</section>
			<section id="home-posts">
				<div class="container">
					<?php get_template_part( 'template-parts/content', "blog" ); ?>
				</div>
			</section>
			<section id="home-content">
				<div class="container">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();