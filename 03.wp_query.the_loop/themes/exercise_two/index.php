<?php get_header(); ?>

<body <?php body_class($class); ?>>
	<div class="posts-container">
		<h2>Category: Blog, News, Events</h2>
		<h6>All posts</h6>
		<h6>Current year</h6>
		<h6>Sorted by title asc</h6>
		<?php 
		$exercise_two_category_ids = array (
			get_term_by('slug', 'news', 'category')->term_id,
			get_term_by('slug', 'blog', 'category')->term_id,
			get_term_by('slug', 'events', 'category')->term_id,
		);


		$today = getdate();
		
		$latest_five_posts = array(
			'category__in' => $exercise_two_category_ids,
			'year' => $today["year"],
			'orderby' => 'title',
			'order' => 'ASC',
			'posts_per_page' => -1,
		); ?>
		<?php exercise_one_print_posts($latest_five_posts); ?>
	</div><!-- /.posts-container -->
</body>

<?php get_footer(); ?>