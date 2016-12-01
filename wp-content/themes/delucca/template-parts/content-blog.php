<?php
/**
 * Template for display "Nosso trabalho" section.
 * 
 * 
 * 
 * 
 * 
 * Creating query of categories to use in foreach loops.
 * The first foreach is to display the category names and slug
 * and use it as a filter
 * 
 * The second foreach is to get only two posts from each category on the site.
 * Inside this second foreach we have a  while loop for display the post content
 */
 
// Querying categories
$sem_categoria = get_cat_ID("Sem Categoria");
$categories_args = array(
	"exclude"	=> "-$sem_categoria",
	"hide_empty"	=> false,
);
$categories = get_categories($categories_args);

// Create a new wp_query to use it inside the while loop,
// that is inside of the second foreach
$blog_query = new WP_Query;

// If this template part is open in the home page,
// displaying only 2 posts for each category
// If is any other page will get all posts from all category
if( is_front_page() ) {
	$posts_number = 2;
} else {
	$posts_number = 99;
}

?>

<div class="row">
	<div class="col-sm-12 clearfix">
		<div class="title-box">
			<h2>Nosso trabalho</h2>
		</div>
		<ul class="cat-filter">
			<?php
				// First foreach
				foreach($categories as $cat) : ?>
					<li data-filter="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
				<?php endforeach;
			?>
			<li class="show-all active" >Todos</li>
		</ul>
	</div>
</div>

<div class="row blog-row">
	<?php
		// Second foreach
		foreach($categories as $cat_post) :
			
			// Args for posts query
			$blog_query->query( array(
				"cat"	=>	$cat_post->term_id,
				"posts_per_page" => $posts_number,
				"orderby"	=> "modified",
			));
			
			// While loop, for display posts
			while( $blog_query->have_posts() ): $blog_query->the_post(); ?>
			
			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4 post-wrapper" data-category="<?php echo $cat_post->slug; ?>">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_html(get_the_title()); ?>" class="post-link slide">
					<div class="post-thumb-box">
						<?php the_post_thumbnail("full"); ?>
					</div>
					<div class="post-info-box">
						<?php the_title("<p>","</p>"); ?>
					</div>
				</a>
			</div>
			
			<?php // End while loop
			endwhile;
			// End foreach loop
		endforeach;
	?>
</div>