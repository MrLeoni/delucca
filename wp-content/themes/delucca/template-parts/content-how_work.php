<?php
/**
 * Template for display "Como trabalhamos" section.
 * 
 */

// Build a custom query of "Complementos" post type.
// Only query posts in "Como funciona" taxnomy term

$how_work_args = array(
	"post_type"	=> "complementos",
	"posts_per_page" => 4,
	"orderby"	=> "modified",
	"tax_query"	=> array(array( "taxonomy" => "categorias", "field" => "slug", "terms" => "como-funciona"))
);
$how_work_query = new WP_Query( $how_work_args );

?>

<div class="row">
	<div class="col-sm-12">
		<div class="title-box">
			<h2>Como trabalhamos</h2>
		</div>
	</div>
</div>
<div class="row">
	<?php
		while($how_work_query->have_posts()): $how_work_query->the_post();
		
		// Get ACF Fields
		$number = get_field("how-work-number");
		$name = get_field("how-work-name");
		$icon = get_field("how-work-icon");
		
		?>
			<div class="col-sm-3">
				<div class="how-work-box">
					<div class="how-work-position">
						<p class="number"><?php echo $number; ?></p>
						<p class="name"><?php echo $name; ?></p>
						<p class="icon"><i class="<?php echo $icon; ?>" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_postdata();
	?>
	<div class="line hidden-xs"></div>
</div>
