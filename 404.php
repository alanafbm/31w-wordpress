<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>

	<div id="primary" class="content-area" style="padding:25px">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Erreur 404 - Not Found', '31w' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( "C'est un peu gênant, n'est-ce pas ??", '31w' ); ?></h2>
					<p><?php _e( "Il semble que rien n'ait été trouvé à cet endroit. Essayez peut-être une recherche??", '31w' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
