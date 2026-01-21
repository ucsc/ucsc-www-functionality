<?php
/**
 * Plugin functions and definitions.
 *
 * @package UCSC_www_Functionality
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Filter the outermost/icon-block when rendered on the front page.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function ucsc_filter_icon_block_on_front_page( $block_content, $block ) {
	// Only run on the front page
	if ( ! is_front_page() ) {
		return $block_content;
	}

  // We capture the HTML tag in the site-title block content
  $pattern = '/<(div) (.*)<\/(div)>/';

  // If we're on the home page, we make the site-title an <h1>
  $replacement = '<h1 $2</h1>';
  $block_content = preg_replace($pattern, $replacement, $block_content);

  // To prevent modifying multiple blocks, we remove the filter after the first time it runs
  remove_filter('render_block_outermost/icon-block', 'ucsc_filter_icon_block_on_front_page', 10);
	return $block_content;
}
add_filter( 'render_block_outermost/icon-block', 'ucsc_filter_icon_block_on_front_page', 10, 2 );
