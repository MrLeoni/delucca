<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agência_Delucca
 */

?>

	<footer id="footer">
		<div class="container">
			<div class="footer-wrapper clearfix">
				<p class="copy">&copy; <span id="js-date"></span> Agência Delucca</p>
				<ul class="social-menu">
					<li><a href="https://www.facebook.com/agenciadelucca" title="Facebook" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
					<li><a href="https://www.behance.net/agenciadelucca" title="Behance" target="_blank"><i class="fa fa-behance-square" aria-hidden="true"></i></a></li>
					<li><a href="https://www.linkedin.com/company/ag-ncia-delucca" title="Linkdin" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>
	</div><!-- #page -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/jquery-1.12.4.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
