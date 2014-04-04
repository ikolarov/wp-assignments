<?php get_header(); ?>

<h2>Най-новите 5 поста</h2>

<?php
$args = array('pagination' => false, 'posts_per_page' => '5');
show_post($args);
?>

<h2>Най-старите 3 поста</h2>

<?php
$args = array('pagination' => false, 'posts_per_page' => '3', 'order' => 'ASC');
show_post($args);
?>

<h2>Най-новите 2 поста от категорията News</h2>
<?php
$news = get_term_by('name', 'news', 'category');
$args = array('pagination' => false, 'posts_per_page' => '2', 'cat' => $news->term_id);
show_post($args);
?>

<h2>Най-стария пост, който е едновременно в категория News и в категория Blog</h2>

<?php 
$blog = get_term_by('name', 'blog', 'category');

$args = array('pagination' => false, 'posts_per_page' => '1', 'category__and' => array($news->term_id, $blog->term_id), 'order' => 'ASC');
show_post($args);
?>

<h2>Всички постове, които са едновременно в категория News и в таг website, подредени по заглавие в увеличаващ се ред</h2>
<?php 
$website_tag = get_term_by('name', 'website', 'post_tag');
$args = array('orderby' => 'title', 'order' => 'ASC', 'cat' => $news->term_id, 'tag_id' => $website_tag->term_id);
show_post($args);
?>

<h2>Най-стария пост, който е едновременно в категория Events и в таг conference, от декември, 2012.</h2>
<?php
$events = get_term_by('name', 'events', 'category');
$args = array('category' => $events->term_id, 'tag' => 'conference', 'year' => 2012, 'monthnum' => 12, 'posts_per_page' => 1, 'order' => 'ASC');
show_post($args);
?>

<h2>Всички постове, които са в категория News и НЕ са в категория Blog, подредени в произволен ред</h2>
<?php
$blog = get_term_by('name', 'blog', 'category');
$args = array('cat' => "$news->term_id, -$blog->term_id", 'orderby' => 'rand');

show_post($args);
?>

<?php
get_footer();
?>