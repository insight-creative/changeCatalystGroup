<?php
/**
 * changeCatalystResponsive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package changeCatalystResponsive
 */
 function changeCatalystResponsiveChild_fonts_url() {
 	$fonts_url = '';

 	/**
 	 * Translators: If there are characters in your language that are not
 	 * supported by Libre Franklin and Open Sans, translate this to 'off'. Do not translate
 	 * into your own language.
 	 */
 	$Roboto = _x( 'on', 'Roboto font: on or off', 'changeCatalystResponsiveChild' );
 	$OpenSans = _x( 'on', 'Open Sans font: on or off', 'changeCatalystResponsiveChild' );

 	$font_families = array();

 	if ( 'off' !== $Roboto ) {
 		$font_families[] = 'Roboto:400,700,900';
 	}

 	if ( 'off' !== 	$OpenSans ) {
 		$font_families[] = 'Open Sans:400,700';
 	}


 	if ( in_array( 'on', array($Roboto, 	$OpenSans) ) ) {

 		$query_args = array(
 			'family' => urlencode( implode( '|', $font_families ) ),
 			'subset' => urlencode( 'latin,latin-ext' ),
 		);

 		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
 	}

 	return esc_url_raw( $fonts_url );
 }

 /**
  * Add preconnect for Google Fonts.
  *
  * @since Twenty Seventeen 1.0
  *
  * @param array  $urls           URLs to print for resource hints.
  * @param string $relation_type  The relation type the URLs are printed.
  * @return array $urls           URLs to print for resource hints.
  */
 function changeCatalystResponsiveChild_resource_hints( $urls, $relation_type ) {
 	if ( wp_style_is( 'changeCatalystResponsiveChild-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
 		$urls[] = array(
 			'href' => 'https://fonts.gstatic.com',
 			'crossorigin',
 		);
 	}

 	return $urls;
 }
 add_filter( 'wp_resource_hints', 'changeCatalystResponsiveChild_resource_hints', 10, 2 );

function changeCatalystResponsiveChildScripts(){
	wp_enqueue_script('customJS', get_stylesheet_directory_uri() . '/JS/customJS.js');
  wp_enqueue_script('rellaxJS', get_stylesheet_directory_uri() . '/JS/rellax.min.js');
	// Enqueue Google Fonts for our site
	wp_enqueue_script('changeCatalystFonts', changeCatalystResponsiveChild_fonts_url());
}
add_action('wp_enqueue_scripts', 'changeCatalystResponsiveChildScripts');
?>
