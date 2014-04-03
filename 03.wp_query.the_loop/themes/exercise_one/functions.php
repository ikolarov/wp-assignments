<?php
function exercise_one_print_posts( $posts_array ) {
	if ( !is_array($posts_array) ) {
		return;
	}

	$custom_query = new WP_Query($posts_array);

	if ( $custom_query->have_posts() ) :
		while ( $custom_query->have_posts() ) :
			$custom_query->the_post(); ?>
			<div <?php post_class(); ?>>
				<!-- Заглавие (то трябва и да е линк към страницата с детайлен изглед на конкретния пост) -->
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<small>
					<!-- Дата на публикуване -->
					Posted on: <?php the_time("F j, Y"); ?>
					<!-- Автор -->
					by <?php the_author(); ?>
					<!-- Категории, в който е публикуван -->
					in Categories: <?php the_category(","); ?>
					<!-- Тагове, в които е тагнат -->
					<?php the_tags("with tags: ", ", "); ?>
				</small>

				<div class="post-content">
					<!-- Съдържание -->
					<?php the_content('more...'); ?>
				</div><!-- /.post-content -->
			</div>
		<?php
		endwhile;
	endif;
}
?>