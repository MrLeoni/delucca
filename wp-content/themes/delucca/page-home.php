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
$contact_img = get_field("home-contact-img");
$contact_text = get_field("home-contact-text");

get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
			<section id="home-banner" class="parallax" data-speed="8" style="background: url(<?php echo $thumb_url[0]; ?>) no-repeat center 0">
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
			<section id="blog">
				<div class="container">
					<?php get_template_part( 'template-parts/content', "blog" ); ?>
				</div>
			</section>
			<section id="home-content" class="clearfix">
				<div class="content-img-box hidden-xs">
					<img src="<?php echo $home_content_img["url"]; ?>" alt="<?php echo $home_content_img["alt"]; ?>">
				</div>
				<div class="content-content-box">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</div>
			</section>
			<section id="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="contact-img-box">
								<img src="<?php echo $contact_img["url"]; ?>" alt="<?php echo $contact_img["alt"]; ?>">
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="contact-content-box">
								<?php echo $contact_text; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="clients">
				<?php get_template_part( 'template-parts/content', "clients" ); ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();