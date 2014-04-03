<h1>
	<?php if ( is_page() ): ?>
		Single Page <?php the_title(); ?>
	<?php elseif ( is_category() ): ?>
		Viewing Posts in Category: <?php single_cat_title(); ?>
	<?php elseif ( is_tag() ): ?>
		Viewing Posts having Tag: <?php single_tag_title(); ?>
	<?php elseif ( is_author() ): ?>
		Viewing Posts published by: <?php the_author(); ?>
	<?php elseif ( is_date() ): ?>
		<?php if ( is_year() ): ?>
			Posts in <?php _e(get_the_time('Y')); ?>
		<?php elseif ( is_month() ): ?>
			Posts in <?php _e(get_the_time('M Y')); ?>
		<?php elseif ( is_day() ): ?>
			Posts in <?php _e(get_the_time('j M Y')); ?>
		<?php endif; ?>
	<?php elseif ( is_404() ): ?>
		The Page has not been found.
	<?php elseif ( is_single() ): ?>
		Single Post <?php the_title(); ?>
	<?php elseif ( is_search() ): ?>
		You are looking for: <?php get_search_query(); ?>
	<?php endif; ?>
</h1>

	<?php
	$blank_theme_three_weight = 0;
	if ( is_front_page() ) {
		$blank_theme_three_weight += 20;
		echo "its Home page +20<br />";
	}
	if ( is_page_template('template-contact.php') ) {
		$blank_theme_three_weight += 5;
		echo "its template-contact page +5<br />";
	}
	if ( !is_page_template() ) {
		$blank_theme_three_weight -= 1;
		echo "its not template page -1<br />";
	}
	if ( is_page_template('template-services.php') ) {
		$blank_theme_three_weight += 8;
		echo "its template-services page +8<br />";
	}
	if ( is_page( array('about', 'services') ) ) {
		$blank_theme_three_weight += 3;
		echo "its slug ( about | services | page ) +3<br />";
	}
	if ( is_subpage() ) {
		$blank_theme_three_weight += 1;
		echo "its sub page +1<br />";
	}else {
		$blank_theme_three_weight += 2;
		echo "its NOT sub page +2<br />";
	}
	if ( is_page( array('Contact', 'About', 'Web Design') ) ) {
		$blank_theme_three_weight += 3;
		echo "its page named ( Contact | About | Web Design ) +3<br />";
	}
	if ( !is_page('Services') && is_page_template() ) {
		$blank_theme_three_weight += 2;
		echo "its not page service and its not default template +2<br />";
	}
	?>

<h5>Page importancy: <?php echo $blank_theme_three_weight; ?></h5>