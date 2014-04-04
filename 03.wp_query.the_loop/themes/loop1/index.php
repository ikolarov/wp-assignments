<?php if (have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post();	?>
			
				<div class="post-head">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div><!-- /.post-head -->
				
				<div class="post-meta">
					Published on: <?php the_time('jS F Y'); ?>,
					Author: <?php the_author(); ?>,
					Categories: <?php the_category(', '); ?>
					Tags: <?php the_tags(''); ?>
				</div><!-- /.post-meta -->

				<div class="post-content">
					<?php the_content(); ?>
				</div><!-- /.post-content -->
		<?php endwhile; ?>
	
<?php else: ?>
	<h2>No posts found.</h2>
<?php endif ?>