<?php get_header(); ?>

<?php if(have_posts()) : ?>
	Posts by <a href="<?php _e($curauth->user_url); ?>"><?php the_author(); ?></a>:
	
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

<?php get_footer(); ?>