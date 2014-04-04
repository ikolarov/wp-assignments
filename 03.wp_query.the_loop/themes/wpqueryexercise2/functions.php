<?php 
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_length() {
	return 20;
}