<?php
get_header();

$news = get_term_by('name', 'news', 'category');
$blog = get_term_by('name', 'blog', 'category');
$events = get_term_by('name', 'events', 'category');

// $current_year = date('Y');
$current_year = 2012;

$args = array('cat' => "$news->term_id, $blog->term_id, $events->term_id",
			'year' => $current_year,
			'orderby' => 'title',
			'order' => 'ASC'
);

$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): $i = 0; ?>
	<?php while ($the_query->have_posts()): $the_query->the_post();	
		$attachments = get_children( array( 'post_parent' => $post->ID, 'post_mime_type' => 'image' ) );
	?>
		<div class="post <?php echo (++$i % 2 == 0) ? 'post-alt' : ''; ?>">
			<h2>
				<?php if (has_tag('website')): ?>
					Web:
				<?php endif ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php if (in_category('news')): ?>
					(!)
				<?php endif ?>
			</h2>
			<p>Posted: <?php echo human_time_diff(get_the_time('U')) . ' ago'; ?></p>
			<p><?php the_excerpt(); ?></p>
			<p>Images: <?php echo count($attachments); ?></p>
		</div><!-- /.post -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<?php else: ?>
	<p>There are no posts.</p>
<?php endif ?>

<?php
get_footer();
?>