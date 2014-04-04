<?php get_header(); ?>

	<div class="posts-container">
		<h2>Най-новите 5 поста</h2>
		<?php exercise_one_print_posts(array('posts_per_page' => 5)); ?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-старите 3 поста</h2>
		<?php 
		exercise_one_print_posts(array(
			'posts_per_page' => 3,
			'order' => 'ASC'
		)); 
		?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-новите 2 поста от категорията News</h2>
		<?php
		exercise_one_print_posts(array(
			'posts_per_page' => 2,
			'category_name' => 'news'
		));
		?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-стария пост, който е едновременно в категория News и в категория Blog</h2>
		<?php 
		$exercise_one_category_ids = array (
			get_term_by('slug', 'news', 'category')->term_id,
			get_term_by('slug', 'blog', 'category')->term_id
		);
		
		exercise_one_print_posts(array(
			'posts_per_page' => '1',
			'order' => 'ASC',
			'category_and' => $exercise_one_category_ids
		));
		?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Всички постове, които са едновременно в категория News и в таг website, подредени по заглавие в увеличаващ се ред</h2>
		<?php
		exercise_one_print_posts(array(
			'posts_per_page' => '-1',
			'orderby' => 'title',
			'order' => 'ASC',
			'category_name' => 'news',
			'tag' => 'website'
		));
		?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Най-стария пост, който е едновременно в категория Events и в таг conference, от декември, 2012.</h2>
		<?php
		exercise_one_print_posts(array(
			'date_query' => array(
					array(
						'after' => 'December 2012',
					),
				),
			'posts_per_page' => 1,
			'order' => 'ASC',
			'category_name' => 'events',
			'tag' => 'conference'
		));
		?>
	</div><!-- /.posts-container -->

	<div class="posts-container">
		<h2>Всички постове, които са в категория News и НЕ са в категория Blog, подредени в произволен ред</h2>
		<?php 
		// $exercise_one_blog_id = get_term_by('slug', 'blog', 'category');
		// $exercise_one_blog_id = array($exercise_one_blog_id->term_id);

		// exercise_one_print_posts(array(
		// 	'posts_per_page' => -1,
		// 	'category_name' => 'news',
		// 	'category__not_in' => $exercise_one_blog_id,
		// 	'orderby' => 'rand',
		// ));

		exercise_one_print_posts(array(
			'posts_per_page' => -1,
			'tax_query' => array (
				'relation' => 'AND',
				array (
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'news',
				),
				array (
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => array ( 'slug', 'blog', 'category' ),
					'operator' => 'NOT IN',
				),
			),
			'orderby' => 'rand',
		));
		?>
	</div><!-- /.posts-container -->
<?php get_footer(); ?>