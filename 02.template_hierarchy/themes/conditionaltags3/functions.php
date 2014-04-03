<?php

function get_page_weight() {
	$page_weight = 0;

	if (is_front_page()) {
		$page_weight += 20;
	}

	if (is_page_template('template-contact.php')) {
		$page_weight += 5;
	}

	if (is_page() && !is_page_template()) {
		$page_weight -= 1;
	}

	if (is_page_template('template-services.php')) {
		$page_weight += 8;
	}

	if (is_page('about') || is_page('services')) {
		$page_weight += 3;
	}

	$current_post = get_post();     // if outside the loop

	if (is_page() && $current_post->post_parent) { // if is child page
	    $page_weight += 1;
	
	} else {
		$page_weight += 2;
	}

	if (is_page('About') || is_page('Contact') || is_page('Web Design')) {
		$page_weight += 3;
	}

	if (is_page('Services') && is_page_template()) {
		$page_weight += 2;
	}

	return $page_weight;
}

?>