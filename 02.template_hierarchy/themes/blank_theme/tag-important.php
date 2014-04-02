<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		Tags
		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<?php the_tags('Posts tagged: ', ', ', '<br />'); ?> 
		<?php _e('Posted '); ?> by <?php the_author(); ?> at
		<?php the_time('F js, Y'); ?>
		<?php the_content('more'); ?>
		<?php //the_excerpt(); ?>
		<?php //the_author(); ?>
		<?php //the_date(); ?>
		<br />
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>