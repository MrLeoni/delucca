<?php
/**
 * Template name: Quem Somos
 *
 * @package Agência_Delucca
 */
 
 // ACF Fields
 
 $infographic = get_field('about-infographic-dekstop');
 $mobile_infographic = get_field('about-infographic-mobile');
 
 $img_fixed = get_field('about-img-fixed');
 $img_parallax = get_field('about-img-bg');
 
 $text = get_field('about-text');
 
 $link_check = get_field('about-link-check');
 $link_text = get_field('about-link-text');
 $link_url = get_field('about-link-url');
 $link_target = get_field('about-link-target');

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section class="infographic-text">
				<?php while(have_posts()): the_post();
					the_content();
				endwhile; ?>
			</section>
			
			<section class="about-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="infographic-box">
								<img class="desktop" src="<?php echo $infographic['url']; ?>" alt="<?php echo $infographic['alt']; ?>">
								<img class="mobile" src="<?php echo $mobile_infographic['url']; ?>" alt="<?php echo $mobile_infographic['alt']; ?>">
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="about-footer parallax" class="parallax" style="background: url(<?php echo $img_parallax['url']; ?>) no-repeat center center">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-footer-content-box">
								<?php
								
								echo $text;
								
								if ($link_check == 'true') { ?>
									<a class="simple-btn" href="<?php echo $link_url; ?>" title="<?php echo $link_text; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about-img-box">
								<img src="<?php echo $img_fixed['url']; ?>" alt="<?php echo $img_fixed['alt']; ?>">
							</div>
						</div>
					</div>
				</div>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();