<?php
/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

function the_forced_content() {
	global $post;
	$content = $post->post_content;
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	echo wp_kses_post( $content );
	
}
/**
 * Slightly Modified Options Framework
 */
//require_once ('admin/index.php');
?>