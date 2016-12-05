<?php
/**
 * 
 * Template for display "Clientes" section.
 * 
 */

// Querying custom post type in "Cliente Carrossel" taxanomy term
$clients_args = array(
	"post_type"	=> "complementos",
	"posts_per_page" => 99,
	"orderby"	=> "modified",
	"tax_query"	=> array(array( "taxonomy" => "categorias", "field" => "slug", "terms" => "cliente-carrossel"))
);
$clients_query = new WP_Query( $clients_args );

?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Clientes</h2>
		</div>
		<div class="col-sm-12">
			<div class="client-slider-wrapper">
				<ul class="client-slider">
					<?php 
						while($clients_query->have_posts()): $clients_query->the_post();
						$client_logo = get_field("client-logo"); 
						$client_link = get_field("client-link"); ?>
							
							<li>
								<a href="<?php echo $client_link; ?>" title="<?php echo get_the_title(); ?>" target="_blank" class="clients-link">
									<img src="<?php echo $client_logo["url"]; ?>" alt="<?php echo $client_logo["alt"]; ?>">
								</a>
							</li>
							
						<?php endwhile;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</div>
</div>