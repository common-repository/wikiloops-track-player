<?php
/*
	Plugin Name: Wikiloops Track Player
	Plugin URI: https://wikiloops.com/wp-plugin.php
	Version: 1.0.1
	Description: Wikiloops is probably the world's greatest online jamming community. This plugin allows the easy embedding of the wikiloops jam track player
	Author: jmrukkers		
	Author URI: https://www.wikiloops.com/artist/jmrukkers.php
	
	Copyright 2018, Wikiloops.com
*/

function wp_wikiloopsShortcode($atts){
	extract(shortcode_atts(array(
	'id' => '0',
	), $atts));
	if (preg_match('/\d+/', $id, $matches)) {
		// Capture the first number - cleans out superfluous html on copy paste and provides protection agains invalid track numbers
		$src = "https://www.wikiloops.com/embed/$id";
		$string = "<iframe width='300' height='175' scrolling='no' style='width:100%' src='$src' frameborder='0'></iframe>";
	} else {
		$string = 'Invalid Wikiloops track number ' . htmlspecialchars($id);
	}
	return $string;
}

add_shortcode('wikiloops', 'wp_wikiloopsShortcode');

wp_oembed_add_provider( 'https://*.wikiloops.com/*', 'https://www.wikiloops.com/api/oembed' );
?>