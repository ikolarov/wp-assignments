<?php
function exercise_one_print_posts( $query_vars ) {
	if ( !is_array($query_vars) ) {
		return;
	}

	$custom_query = new WP_Query($query_vars);

	if ( $custom_query->have_posts() ) :
		while ( $custom_query->have_posts() ) :
			$custom_query->the_post();

			$additional_post_classes = array(); 
			$additional_post_classes[] = $custom_query->current_post % 2 ? 'odd' : 'even';

			if ($custom_query->current_post === 0 ) {
				$additional_post_classes[] = 'first';
			}
			if ($custom_query->current_post === ($custom_query->post_count - 1) ) {
				$additional_post_classes[] = 'last';
			}

			$attachments = get_children(array(
				'post_parent' => get_the_ID(), 
				'post_mime_type' => 'image')
			);
			$images_count = count($attachments); 

			$post_content = wp_trim_words( get_the_content(), 20 );
			$post_content = apply_filters( 'the_content', $post_content );
			?>

			<div <?php post_class($additional_post_classes); ?>>
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php echo has_tag('website') ? 'Web: ' : ''; ?>
						<?php the_title(); ?>
						<?php echo has_category('News') ? '!' : ''; ?>
					</a>
				</h3>

				<small>
					Posted <?php echo human_time_diff( get_the_time('U') ); ?> ago
					in Categories: <?php the_category(","); ?>
					<?php the_tags("with tags: ", ", "); ?>
					by <?php the_author(); ?>
					[<?php echo $images_count; ?> Images]
					[<?php echo $custom_query->current_post; ?> Post]
				</small>

				<div class="post-content">
					<?php echo $post_content; ?>
				</div><!-- /.post-content -->
			</div>
		<?php
		endwhile;
	endif;
}

add_filter( 'the_title', 'exercise_one_get_the_title' );
function exercise_one_get_the_title ($title) {
	if ( is_search() ) {
		$title = preg_replace('/' . preg_quote(get_search_query(), '/') . '/i', '<span class="search-match">$0</span>', $title);
	}

	return $title;
}