<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<h2>This is template for Contact.</h2>

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
<?php else: ?>
	No page found.
<?php endif; ?>