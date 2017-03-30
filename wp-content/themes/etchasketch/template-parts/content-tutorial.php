<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package etchasketch
 */

global $tutorial_mb;
$tutorial_mb->the_meta();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( $tutorial_mb->get_the_value( 'tut-pdf' ) ) { ?>
				<p><a class="download" href="<?php $tutorial_mb->the_value( 'tut-pdf' ); ?>">Download PDF</a></p>
		<?php } ?>
	</header><!-- .entry-header -->



	<div class="entry-content">

		<?php if ( $tutorial_mb->get_the_value( 'tut-vimeo' ) ) { ?>
			<section class="tut-video">
				<h2 class="content-subheading">Video</h2>
				<div class="video">
					<?php $tutorial_mb->the_value( 'tut-vimeo' ); ?>
				</div><!--.video-->
			</section>
		<?php } ?>



		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'etchasketch' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'etchasketch' ),
				'after'  => '</div>',
			) );
		?>


			<section class="tut-walkthrough">
				<h2 class="content-subheading">Walkthrough</h2>
				<div class="walkthrough">
					<?php if ( $tutorial_mb->get_the_value( 'wt-description' ) ) { ?>
						<div class="intro">
							<?php $tutorial_mb->the_value( 'wt-description' ); ?>
						</div><!--.intro-->

						<?php $count = 1;
							while ( $tutorial_mb->have_fields( 'wt-steps' ) ) {
							?>
							<div class="wt-step">

								<div class="screenshot">
									<?php if ( $tutorial_mb->get_the_value( 'wt-screenshot' ) ) { ?>
										<img src="<?php $tutorial_mb->the_value( 'wt-screenshot' ); ?>" alt="<?php $tutorial_mb->the_value( 'wt-step-title' ); ?>" />
									<?php } ?>
								</div><!--.screenshot-->

								<h3 class="step-title"><?php echo $count . '. ' . $tutorial_mb->get_the_value( 'wt-step-title' ); ?></h3>

								<div class="content">
									<?php $tutorial_mb->the_value( 'wt-step-description' ); ?>
								</div><!--.content-->

							</div><!--.wt-step-->
							<?php $count++; ?>
						<?php } ?>

					<?php } ?>
				</div><!--.walkthrough-->
			</section>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php etchasketch_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
