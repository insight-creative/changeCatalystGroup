<?php
/**
 * changeCatalystResponsive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package changeCatalystResponsive
 */

if ( ! function_exists( 'changecatalystresponsive_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function changecatalystresponsive_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on changeCatalystResponsive, use a find and replace
		 * to change 'changecatalystresponsive' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'changecatalystresponsive', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Advanced Custom Fields Customizations
		// Add ACF options page for global settings
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
		}
		// Set fields to collapsed for a condensed view for new users
		function my_acf_admin_head() {
		?>
		<script type="text/javascript">
		    (function($){
		        $(document).ready(function(){
		            $('.layout').addClass('-collapsed');
		            $('.acf-postbox').addClass('closed');
		        });
		    })(jQuery);
		</script>
		<?php
		}
		add_action('acf/input/admin_head', 'my_acf_admin_head');
	}
endif;
add_action( 'after_setup_theme', 'changecatalystresponsive_setup' );

function changeCatalystResponsive_fonts_url() {
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
 function changeCatalystResponsive_resource_hints( $urls, $relation_type ) {
  if ( wp_style_is( 'changeCatalystResponsive-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
 	 $urls[] = array(
 		 'href' => 'https://fonts.gstatic.com',
 		 'crossorigin',
 	 );
  }

  return $urls;
 }
 add_filter( 'wp_resource_hints', 'changeCatalystResponsive_resource_hints', 10, 2 );

require_once('inc/custom-post-type.php');
require_once('inc/custom-taxonomy.php');

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'portfolio' ) );
    return $query;
}
/**
 * Enqueue scripts and styles.
 */
function changecatalystresponsive_scripts() {
	wp_enqueue_style( 'changecatalystresponsive-style', get_stylesheet_uri() );
	wp_enqueue_script( 'changecatalystresponsive-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'changecatalystresponsive-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('customJS', get_stylesheet_directory_uri() . '/JS/customJS.js');
	// Enqueue Google Fonts for our site
	wp_enqueue_script('changeCatalystFonts', changeCatalystResponsive_fonts_url());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'changecatalystresponsive_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
