<?php
/*
Template Name: Page
*/

get_header();

if (is_front_page()) {
	echo "You are on the home page";
} else {
	echo "You are viewing an internal page";
}

if (is_page('about')) {
	echo "and you are on the About page";
}

get_footer();
?>