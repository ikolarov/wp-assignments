<?php the_post(); ?>
<?php if(is_page()) :?>
<h2><?php the_title(); ?></h2>
<?php elseif(is_category()) :?>
<h2><?php single_cat_title(); ?></h2>
<?php elseif(is_tag()) :?>
<h2><?php single_tag_title(); ?></h2>
<?php elseif (is_author()) :?>
<h2><?php echo get_the_author(); ?></h2>
<?php elseif (is_year()) :?>
<h2><?php the_date('Y'); ?></h2>
<?php elseif (is_month()) :?>
<h2><?php the_date('Y-F'); ?></h2>
<?php elseif (is_day()) :?>
<h2><?php the_date('Y-F-d'); ?></h2>
<?php elseif (is_404()) :?>
<h2>This is a 404 error page.</h2>
<?php elseif (is_single()) :?>
<h2><?php the_title(); ?></h2>
<?php elseif (is_search()) :?>
<h2><?php get_search_query(); ?></h2>
<?php endif ?>

