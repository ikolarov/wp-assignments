<h1>
	<?php if ( is_page() ): ?>
		Single Page <?php the_title(); ?>
	<?php elseif ( is_category() ): ?>
		Viewing Posts in Category: <?php single_cat_title(); ?>
	<?php elseif ( is_tag() ): ?>
		Viewing Posts having Tag: <?php single_tag_title(); ?>
	<?php elseif ( is_author() ): ?>
		Viewing Posts published by: <?php the_author(); ?>
	<?php elseif ( is_date() ): ?>
		<?php if ( is_year() ): ?>
			Posts in <?php _e(get_the_time('Y')); ?>
		<?php elseif ( is_month() ): ?>
			Posts in <?php _e(get_the_time('M Y')); ?>
		<?php elseif ( is_day() ): ?>
			Posts in <?php _e(get_the_time('j M Y')); ?>
		<?php endif; ?>
	<?php elseif ( is_404() ): ?>
		The Page has not been found.
	<?php elseif ( is_single() ): ?>
		Single Post <?php the_title(); ?>
	<?php elseif ( is_search() ): ?>
		You are looking for: <?php get_search_query(); ?>
	<?php endif; ?>
</h1>

<?php if(have_posts()) : ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		in <strong><?php the_category(','); ?></strong>
		<?php the_tags('Posts tagged: ', ', ', '<br />'); ?> 
		<?php _e('Posted '); ?> by <?php the_author(); ?> at
		<?php the_time('F js, Y'); ?>
		<?php the_content('more'); ?>
		<? comments_template(); ?>  
		<br />
	<?php endwhile; ?>
<?php endif; ?>