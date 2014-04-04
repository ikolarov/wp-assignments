<?php get_header(); ?>
<?php 
$index_posts = new WP_Query(array( 
	'category__in' => array(get_cat_ID('Blog'), get_cat_ID('News'), get_cat_ID('Events')),
	'year' => 2013, /*date('Y')*/
	'orderby' => 'title',
	'order' => 'asc'
));
?>

<?php if ($index_posts->have_posts()): 
	$post_counter = 1;
?>

	<?php while($index_posts->have_posts()): ?>
		<div class="post<?php echo $post_counter%2 ? " post-odd": ""; ?>" >
			<?php $post_counter ++;
			$index_posts->the_post();  ?>
			<div class="post-head">
				<h1>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
					<?php echo is_category('News') ? "!" : ""; ?>
					</a>	
				</h1>
			</div><!-- /.post-head -->
			
			<div class="post-meta">
				Time: <?php echo human_time_diff(get_the_time('U')); ?>
				Author: <?php the_author(); ?>,
				Categories: <?php the_category(', '); ?>
				Tags: <?php the_tags(''); ?>
			</div><!-- /.post-meta -->
			
			<div class="post-excerpt">
				<?php echo wp_trim_words( get_the_content(), 20 ) ; ?>
			</div><!-- /.post-excerpt -->
		</div><!-- /.post -->
	<?php endwhile; ?>
<?php endif; ?>
<br />
<?php get_footer(); ?>
<?php


