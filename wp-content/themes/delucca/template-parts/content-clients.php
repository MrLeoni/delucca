<?php
/**
 * 
 * Template for display "Clientes" section.
 * 
 */
 
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
		<div class="col-sm-offset-1 col-sm-10">
			<div class="client-slider-wrapper">
				<ul class="client-slider">
					
					<?php 
						while($clients_query->have_posts()): $clients_query->the_post();
						$client_logo = get_field("client-logo"); ?>
						
							<li><img src="<?php echo $client_logo["url"]; ?>" alt="<?php echo $client_logo["alt"]; ?>"></li>
						
						<?php endwhile;
						wp_reset_postdata();
					?>
					
				</ul>
			</div>
		</div>
	</div>
</div>