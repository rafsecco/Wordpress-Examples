<?php
/**
 * Plugin Name: Meu Plugin 2
 * Description: Um plugin de exemplo para WordPress.
 * Version: 1.0.0
 */

function my_content_footer($content) {
	if ( is_single( )) {
		return $content . '<p>Obrigado por ler este post! - Plugin 2</p>';
	}
}

add_filter('the_content', 'my_content_footer');
