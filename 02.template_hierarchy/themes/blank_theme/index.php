<?php get_header(); ?>

<?php if( have_posts() ): ?>
	<?php while( have_posts() ): ?>
		<?php the_post() ?>
		<div id="post-<?php the_permalink(); ?>">
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<div class="meta">
				<?php _e("Posted in"); ?>
				<?php the_category(","); ?>
				by <?php the_author(); ?>
				on the <?php the_time("F js, Y"); ?>
				<?php edit_post_link( __('Edit This') ); ?>
				<div class="main">
					<?php the_content(__('more...')); ?>
				</div><!-- /.main -->
			</div><!-- /.meta -->
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>