<?php the_post(); ?>
<?php if(is_page()): ?>
	<h2>Page-title:<?php the_title(); ?></h2>
<?php elseif(is_single()): ?>
	<h2>Post-title: <?php the_title(); ?></h2>
<?php elseif(is_category()): ?>
	<p>Categories: </p>
<?php elseif(is_tag()): ?>
	<p>Tags: </p>
<?php elseif(is_author()): ?>
	<p>Author: <?php the_author(); ?></p>
<?php elseif(is_day()): ?>
	<p>Posts in <?php the_date('d F, Y'); ?></p>
<?php elseif(is_month()): ?>
	<p>Posts in <?php the_date('F, Y'); ?></p>
<?php elseif(is_year()): ?>
	<p>Posts in <?php the_date('Y'); ?></p>
<?php elseif(is_search()): ?>
	<p>Search </p>
<?php elseif(is_404()): ?>
	<h2>404 - Page Not Found</h2>
<?php else: ?> 
	index.php
<?php endif; ?>

