<?php
/*
Template Name: Tag
*/
get_header();
echo "Posts tagged: ";
$tag_title = single_tag_title();

get_footer();
?>