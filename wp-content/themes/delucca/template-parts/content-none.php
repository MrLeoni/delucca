<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agência_Delucca
 */

?>

<div class="row">
	<div class="col-xs-offset-2 col-xs-8">
		<section class="no-results not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nada para exibir...', 'delucca' ); ?></h1>
			</header><!-- .page-header -->
		
			<div class="page-content">
				<?php
				if ( is_home() ) : ?>
					
					<p><?php esc_html_e( 'Estamos preparando uma seleção com nossos melhores posts!', 'delucca' ); ?></p>
					
				<?php elseif ( is_search() ) : ?>
					
					<p><?php esc_html_e( 'Desculpe, mas não encontramos nenhum resultado para sua pesquisa. Tente novamente com palavras ou termos diferentes', 'delucca' ); ?></p>
					
					<?php
				else : ?>
					
					<p>Parece que não encontramos nada para exibir aqui... Gostaria de voltar para a <a class="simple-link" href="<?php echo esc_html(home_url("/")); ?>" title="Home">home</a>?</p>
					<?php
				endif; ?>
			</div><!-- .page-content -->
		</section><!-- .no-results -->
	</div>
</div>
