<?php 

function conditional_tags_three_page_weight($id) {
	global $post;
	$page_weight = 0;
	
	if(is_front_page($id)) {
		$page_weight += 20;
	}

	if(is_page_template('template-contact.php')) {
		$page_weight += 5;
	}

	if(!is_page_template($id) && is_page($id)) {
		$page_weight -= 1;
	}

	if(is_page_template('template-services.php')) {
		$page_weight += 8;
	}

	if (is_page('about') || is_page('services')) {
		$page_weight += 3;
	}

	if(is_subpage($id)) {
		$page_weight +=1;
	} 

	if(!is_subpage($id)) {
		$page_weight += 2;
	}

	if($post->post_parent)

	if(is_page('Contact') || is_page('About') || $is_page('Web Design')) {
		$page_weight += 3;
	}


	return $page_weight;
}

function is_subpage() {
    global $post;                
    if ( is_page() && $post->post_parent ) {   
        return $post->post_parent;           
    } else {                                  
        return false;                        
    }
}