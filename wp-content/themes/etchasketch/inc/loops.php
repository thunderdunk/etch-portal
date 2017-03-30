<?php

function etch_tuts_main() {
  global $post;
  // WP Query Loop
  $args = array(
  	'post_type' => 'etch_tutorial',
  	'posts_per_page' => -1,
  );
  // The Query
  $tut_query = new WP_Query( $args );

  // The Loop
  if ( $tut_query->have_posts() ) { ?>
  	<section class="post-loop">

  	<?php while ( $tut_query->have_posts() ) { ?>
  		<?php $tut_query->the_post(); ?>

  		<article class="<?php post_class(); ?>">
        <div class="thumb">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
        </div><!--.thumb-->

        <div class="content">
    			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    			<?php the_excerpt(); ?>
        </div><!--.content-->

  		</article>
  	<?php } ?>
  	</section>
  <?php } else {
  	// no posts found
  }
  // Restore original Post Data
  wp_reset_postdata();
}
?>
