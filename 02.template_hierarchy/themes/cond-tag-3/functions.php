<?php 

function page_weight(){
	$weight_points = 0;
	if (is_page() && is_front_page()) {
		$weight_points += 20;
	}
	if(is_page_template('template-contact.php')){
		$weight_points += 5;
	}
	if (!is_page_template()) {
		$weight_points += -1;
	}
	if (is_page_template('template-services.php')) {
		$weight_points += 8;
	}
	if (is_page(array('about', 'services'))) {
		$weight_points += 3;
	}
	if (!is_subpage()) {
		$weight_points += 2;
	}
	if (is_subpage()) {
		$weight_points += 1;
	}
	if (is_page(array('Contact', 'About', 'Web Design'))) {
		$weight_points += 3;
	}
	if (!is_page('Services') && is_page_template()) {
		$weight_points += 2;
	}
	return $weight_points;
}

function is_subpage() {
    global $post;                              

    if ( is_page() && $post->post_parent ) {   
        return $post->post_parent;             
    else{
        return false;                          
    }
}