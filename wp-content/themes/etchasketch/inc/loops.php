<?php
/* WP Query Loop
$args = array(
	'post_type' => 'post',
	'posts_per_page' => -1,
);
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) { ?>
	<section class="post-loop">

	<?php while ( $the_query->have_posts() ) { ?>
		<?php $the_query->the_post(); ?>

		<article class="<?php post_class(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</article>
	<?php } ?>
	</section>
<?php } else {
	// no posts found
}
// Restore original Post Data
wp_reset_postdata();
*/
?>