<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agência_Delucca
 */
 
// Get ACF Fields
$banner = get_field("post-banner");
$img = get_field("post-img");

?>

<section id="post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="parallax post-banner" data-speed="8" style="background: linear-gradient(rgba(0,174,239,0.5), rgba(0,174,239,0.5)), url(<?php echo $banner["url"]; ?>) no-repeat center 0">
			<div class="container">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
		</div>
		
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="concept-img-box">
							<img src="<?php echo $img["url"]; ?>" alt="<?php echo $img["url"]; ?>">
						</div>
					</div>
					<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
						<div class="entry-content">
							<?php
								the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue lendo %s <span class="meta-nav">&rarr;</span>', 'delucca' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );
							?>
						</div><!-- .entry-content -->
					</div>
				</div>
			</div>
		</div>
		
	</article><!-- #post-## -->
</section>
