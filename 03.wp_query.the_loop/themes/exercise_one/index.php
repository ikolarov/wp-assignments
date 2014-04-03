<?php get_header(); ?>

<body <?php body_class($class); ?>>
	<div class="posts-container">
		<h2>Най-новите 5 поста</h2>
		<?php $latest_five_posts = array('posts_per_page' => 5); ?>
		<?php exercise_one_print_posts($latest_five_posts); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-старите 3 поста</h2>
		<?php $oldest_three_posts = array(
			'posts_per_page' => 3,
			'order' => 'ASC'
		); ?>
		<?php exercise_one_print_posts($oldest_three_posts); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-новите 2 поста от категорията News</h2>
		<?php $latest_two_news_posts = array(
			'posts_per_page' => 2,
			'category_name' => 'news'
		); ?>
		<?php exercise_one_print_posts($latest_two_news_posts); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-стария пост, който е едновременно в категория News и в категория Blog</h2>
		<?php 
		$exercise_one_category_ids = array (
			get_term_by('slug', 'news', 'category')->term_id,
			get_term_by('slug', 'blog', 'category')->term_id
		);
		
		$oldest_blog_and_news_posts = array(
			'posts_per_page' => '1',
			'order' => 'ASC',
			'category_and' => $exercise_one_category_ids
		); ?>
		<?php exercise_one_print_posts($oldest_blog_and_news_posts); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Всички постове, които са едновременно в категория News и в таг website, подредени по заглавие в увеличаващ се ред</h2>
		<?php $cat_news_and_tag_website_posts_sort_by_title_asc = array(
			'posts_per_page' => '-1',
			'orderby' => 'title',
			'order' => 'ASC',
			'category_name' => 'news',
			'tag' => 'website'
		); ?>
		<?php exercise_one_print_posts($cat_news_and_tag_website_posts_sort_by_title_asc); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-стария пост, който е едновременно в категория Events и в таг conference, от декември, 2012.</h2>
		<?php $oldest_one_cat_events_tag_conference_after_dec_twenty_twelve_posts = array(
			'date_query' => array(
				array(
					'month'      => 12,
					'compare'   => '>=',
				),
				array(
					'year'      => 2012,
					'compare'   => '>=',
				)
			),
			'posts_per_page' => 1,
			'order' => 'ASC',
			'category_name' => 'events',
			'tag' => 'conference'); ?>
		<?php exercise_one_print_posts($oldest_one_cat_events_tag_conference_after_dec_twenty_twelve_posts); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Всички постове, които са в категория News и НЕ са в категория Blog, подредени в произволен ред</h2>
		<?php 
		$exercise_one_blog_id = get_term_by('slug', 'blog', 'category');
		$exercise_one_blog_id = array($exercise_one_blog_id->term_id);

		$cat_news_notcat_blog_posts_sort_random = array(
			'posts_per_page' => -1,
			'category_name' => 'news',
			'category__not_in' => $exercise_one_blog_id,
			'orderby' => 'rand',
		); ?>
		<?php exercise_one_print_posts($cat_news_notcat_blog_posts_sort_random); ?>
	</div><!-- /.posts-container -->
</body>

<?php get_footer(); ?>