<?php the_post(); ?>
<?php if (is_day()): ?>
<p>Posts in <?php the_date('d F, Y'); ?></p>
<?php elseif (is_month()): ?>
<p>Posts in <?php the_date('F, Y'); ?></p>
<?php else: ?>
<p>Posts in <?php the_date('Y'); ?></p>
<?php endif; ?> 
I am date.php