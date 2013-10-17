<?php

/////////////////////////////////////////////////////////////////////////////////////
// make read more link to post
/////////////////////////////////////////////////////////////////////////////////////

function new_excerpt_more($more) {
	global $post;

	return '<p><a href="'. get_permalink( get_the_ID() ) . '"' . 'data-post="' . get_the_ID() . '" class="more-link">Read More</a></p>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 55;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );