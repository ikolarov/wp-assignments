<?php 

if (is_date()) :?>
	<h2>Post <?php get_the_time('Y'); ?></h2>
<?php else if(is_month()) :?>

<?php else if(is_day()) :?>

<?php endif ?>
