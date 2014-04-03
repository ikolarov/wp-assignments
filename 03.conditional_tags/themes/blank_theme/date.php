<h1>
	<?php if ( is_date() ): ?>
		<?php if ( is_year() ): ?>
			Posts in <?php _e(get_the_time('Y')); ?>
		<?php elseif ( is_month() ): ?>
			Posts in <?php _e(get_the_time('M Y')); ?>
		<?php elseif ( is_day() ): ?>
			Posts in <?php _e(get_the_time('j M Y')); ?>
		<?php endif; ?>
	<?php endif; ?>
</h1>

<?php if(have_posts()) : ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h4>
		in <strong><?php the_category(','); ?></strong>
		<?php the_tags('Posts tagged: ', ', ', '<br />'); ?> 
		<?php _e('Posted '); ?> by <?php the_author(); ?> at
		<?php the_time('d.m.Y'); ?>
		<?php the_content('more'); ?>
		<? comments_template(); ?>
		<br />
	<?php endwhile; ?>
<?php endif; ?>