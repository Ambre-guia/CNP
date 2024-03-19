<?php


add_theme_support( 'post-thumbnails' );
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}
function my_excerpt_length($length){ return 15; } 
add_filter('excerpt_length', 'my_excerpt_length');

function my_body_class( $classes ) {
 
    if ( is_page_template( 'page-login.php' ) ) {
        $classes[] = 'page-login';
    }
    
    return $classes;
     
}
// add_filter( 'body_class','my_body_class' );




    

/**
 * Filter the output of Yoast breadcrumbs so each item is an <li> with schema markup
 * @param $link_output
 * @param $link
 *
 * @return string
 */
function doublee_filter_yoast_breadcrumb_items( $link_output, $link ) {

	$new_link_output = '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
	$new_link_output .= '<a href="' . $link['url'] . '" itemprop="url">' . $link['text'] . '</a>';
	$new_link_output .= '</li>';

	return $new_link_output;
}
add_filter( 'wpseo_breadcrumb_single_link', 'doublee_filter_yoast_breadcrumb_items', 10, 2 );


/**
 * Filter the output of Yoast breadcrumbs to remove <span> tags added by the plugin
 * @param $output
 *
 * @return mixed
 */
function doublee_filter_yoast_breadcrumb_output( $output ){

	$from = '<span>';
	$to = '</span>';
	$output = str_replace( $from, $to, $output );

	return $output;
}
add_filter( 'wpseo_breadcrumb_output', 'doublee_filter_yoast_breadcrumb_output' );

/**
 * Shortcut function to output Yoast breadcrumbs
 * wrapped in the appropriate markup
 */
function doublee_breadcrumbs() {
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<ul>', '</ul>');
	}
}

function customize_tribe_events_breakpoint() {
    return 600;
  }
  add_filter( 'tribe_events_mobile_breakpoint', 'customize_tribe_events_breakpoint' );

