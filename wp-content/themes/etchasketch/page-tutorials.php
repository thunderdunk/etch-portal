<?php
/**
 * Template Name: Tutorials Main
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package etchasketch
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.


			etch_tuts_main();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
