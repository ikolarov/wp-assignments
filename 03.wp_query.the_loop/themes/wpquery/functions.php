<?php
function show_post($args) {
	$the_query = new WP_Query( $args );
	?>
	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<p>Date: <?php the_time('d.m.Y'); ?></p>
			<p>Author: <?php the_author(); ?></p>
			<p>Categories: <?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	<?php
}
