<?php
/*
Template Name: Date
*/

get_header();

if (is_year()) {
	echo "Posts in $year";
}

if (is_month()) {
	echo "Posts in " . $year;
}


if (is_day()) {
	echo "Posts in " . $year . $day;
}
get_footer();
?>