<?php get_header(); ?>
<h2>
	<?php if ( is_year() ): ?>
		Posts in <?php  the_time('Y') ?>
	<?php elseif ( is_month() ): ?>
		Posts in <?php  the_time('F, Y') ?>
	<?php elseif ( is_day() ): ?>
		Posts in <?php  the_time('j, F, Y') ?>
	<?php endif; ?>
</h2>
<?php get_footer(); ?>
