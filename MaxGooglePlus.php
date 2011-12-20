<?php
/*
Plugin Name: Max Google Plus
Plugin URI: http://digitalgyaan.com/max-google-plus.html
Description: An Easy Way to Add Google Plus Share Button to your WordPress Blog Posts and Pages.
Version: 1.1.0
Author: Debasis Pradhan
Author URI: http://digitalgyaan.com/
*/

add_filter('the_content', 'max_google_plus');
function max_google_plus($content) {
	$content = $content.'<div class="plusone"><g:plusone size="standard" href="'.get_permalink().'"></g:plusone></div>';
	return $content;
}
add_action ('wp_enqueue_scripts','max_google_plus_script');
function max_google_plus_script() {
	wp_enqueue_script('google-plusone', 'https://apis.google.com/js/plusone.js', array(), null);
}

?>
