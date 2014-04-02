<h1>
	<?php if ( is_date() ): ?>
		<?php if ( get_the_time('Y') === '2013' ): ?>
			<?php if ( get_the_time('n') === '5' ): ?>
				<?php if ( get_the_time('j') === '24' ): ?>
					Posts in 24 May, 2013
				<?php else: ?>
					Posts in May, 2013
				<?php endif; ?>
			<?php else: ?>
				Posts in 2013
			<?php endif; ?>
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