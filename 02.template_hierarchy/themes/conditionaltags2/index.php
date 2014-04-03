<?php 

get_header();

?>

<h2>
	<?php if (is_page()): ?>
		<?php the_title(); ?>
	<?php elseif(is_category()): ?>
		<?php single_cat_title(); ?>
	<?php elseif(is_tag()): ?>
		<?php single_tag_title(); ?>
	<?php elseif(is_author()): ?>
		This is author archive page.
	<?php elseif(is_year()): ?>
		Posts in <?php  the_time('Y') ?>
	<?php elseif ( is_month() ): ?>
		Posts in <?php  the_time('F, Y') ?>
	<?php elseif ( is_day() ): ?>
		Posts in <?php  the_time('j, F, Y') ?>
	<?php elseif(is_404()): ?>
		<?php echo "404 Page not found"; ?>
	<?php elseif(is_single()): ?>
		<?php single_post_title(); ?>
	<?php elseif(is_search()): ?>
		Your results for: 
		<?php get_search_query(); ?>
	<?php endif ?>	
</h2>

<?php 

get_footer();

?>