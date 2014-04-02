<h1>
	<?php if ( is_front_page() ): ?>
		You are on the home page.
	<?php elseif ( is_page( 'about' )  ): ?>
		You are viewing an internal page and you are on the <?php the_title() ?> page.
	<?php else: ?>
		You are viewing an internal page.
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
		<?php the_time('F js, Y'); ?>
		<?php the_content('more'); ?>
		<? comments_template(); ?>  
		<br />
	<?php endwhile; ?>
<?php endif; ?>