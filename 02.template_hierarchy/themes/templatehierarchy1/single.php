<?php
/*
Template Name: Single
*/

get_header();
?>

<?php if (is_single()): ?>
	<span>Title: <?php echo get_the_title(); ?></span>
	<div><span>Date: </span><?php echo get_the_date(); ?></div>	
<?php endif ?>

<?php
get_footer();
?>