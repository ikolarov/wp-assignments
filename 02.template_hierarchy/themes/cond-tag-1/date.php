<?php the_post(); ?>
<?php if (is_year()) :?>
	<h2>Post in <?php the_date('Y'); ?></h2>
<?php elseif(is_month()) :?>
	<h2>Posts in <?php the_date('F, Y'); ?></h2>
<?php elseif(is_day()) :?>
	<h2>Posts in <?php the_date('j F, Y'); ?></h2>
<?php endif ?>
