<ul class="posts">
	<h1>Най-новите 5 поста</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page'=> 5,
			'orderby' => 'date', 
			'order'=> 'desc'
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->

<ul class="posts">
	<h1>Най-старите 3 поста</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page'=> 3, 
			'orderby' => 'date', 
			'order'=> 'asc'
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->

<ul class="posts">
	<h1>Най-новите 2 поста от категорията News</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page' => 2, 
			'orderby' => 'date', 
			'order' => 'desc', 
			'category_name' => 'news'
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->

<ul class="posts">
	<h1>Най-стария пост, който е едновременно в категория News и в категория Blog</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page' => 1, 
			'orderby' => 'date', 
			'order' => 'asc', 
			'category__and' => array(get_cat_ID( 'News' ), get_cat_ID('Blog'))
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->

<ul class="posts">
	<h1>Най-стария пост, който е едновременно в категория Events и в таг conference, от декември, 2012.</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page' => 1, 
			'orderby' => 'date', 
			'order' => 'asc', 
			'category_name' => 'events',
			'tag' => 'conference',
			'monthnum' => 12,
			'year' => 2012
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->

<ul class="posts">
	<h1>Всички постове, които са в категория News и НЕ са в категория Blog, подредени в произволен ред</h3>
	<?php
		$latest_posts = new WP_Query(array(
			'posts_per_page' => 1, 
			'category__not_in' => array(get_cat_ID('Blog')),
			'category_name' => 'News'
		));
	?>
	<?php if ($latest_posts->have_posts()): ?>
		<?php while($latest_posts->have_posts()): 
			$latest_posts->the_post();
		?>
			<li class="post">
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
			</li><!-- /.post -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>No posts match your criteria.</p>
	<?php endif; ?>
</ul><!-- /.posts -->
