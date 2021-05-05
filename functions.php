<?php
/**
 * M S Shahnewaz functions and definitions.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */


/***********************************************************************************************************************
 * Register CODE STAR Framework
 **********************************************************************************************************************/

require_once get_theme_file_path() . '/csf/codestar-framework.php';

if (!function_exists('cs_get_options')) {

    function cs_get_options($array = array())
    {
        return get_option('mss-options');
    }
}


/***********************************************************************************************************************
 * Include All other necessary classes for M S Shahnewaz
 **********************************************************************************************************************/
require_once( '' . dirname( __FILE__ ) . '/mss-options.php' );


/***********************************************************************************************************************
 * CONSTANT Declaration for M S Shahnewaz Theme
 **********************************************************************************************************************/

define("DIR_MSS_STYLE", get_stylesheet_directory_uri());
define("DIR_MSS_CSS", DIR_MSS_STYLE . "/assets/css/");
define("DIR_MSS_IMG", DIR_MSS_STYLE . "/assets/img/");
define("DIR_MSS_FONT", DIR_MSS_STYLE . "/assets/fonts/");
define("DIR_MSS_JS", DIR_MSS_STYLE . "/assets/js/");


/***********************************************************************************************************************
 * Include M S Shahnewaz Assets (Stylesheets, JavaScripts)
 **********************************************************************************************************************/
if (!function_exists('mss_assets')) {

    function mss_assets()
    {
        wp_enqueue_style( 'mss-plugins', DIR_MSS_CSS . '/plugins.css' );
        wp_enqueue_style( 'mss-style', DIR_MSS_CSS . '/style.css' );
        wp_enqueue_style( 'mss-custom', DIR_MSS_STYLE . '/style.css' );

        wp_enqueue_script( 'jquery' );
        //wp_enqueue_script( 'mss-jquery-migrate', DIR_MSS_JS . 'jquery-migrate-3.0.0.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-modernizr', DIR_MSS_JS . 'modernizr-2.6.2.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-popper', DIR_MSS_JS . 'popper.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-bootstrap', DIR_MSS_JS . 'bootstrap.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-scrollIt', DIR_MSS_JS . 'scrollIt.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-jquery.waypoints', DIR_MSS_JS . 'jquery.waypoints.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-owl.carousel', DIR_MSS_JS . 'owl.carousel.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-jquery.stellar', DIR_MSS_JS . 'jquery.stellar.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-jquery.fancybox', DIR_MSS_JS . 'jquery.fancybox.min.js', array( 'jquery' ), '3.3.2', TRUE );
        wp_enqueue_script( 'mss-scripts', DIR_MSS_JS . 'scripts.js', array( 'jquery' ), '3.3.2', TRUE );
    }

    add_action('wp_enqueue_scripts', 'mss_assets');
}


/***********************************************************************************************************************
 * Register Navigation on Theme
 **********************************************************************************************************************/

if ( ! function_exists( 'register_mss_menu' ) ) {

    function register_mss_menu() {

        register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    }

    add_action( 'init', 'register_mss_menu' );
}

if ( ! function_exists( 'add_menu_link_class' ) ) {

    function add_menu_link_class( $atts, $item, $args ) {

        $atts['class'] = 'nav-link';

        return $atts;
    }

    add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

    function special_nav_class( $classes, $item ) {

        if ( in_array( 'current-menu-item', $classes ) ) {
            $classes[] = 'active ';
        }

        return $classes;
    }

    add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
}



/* FOR DEV */
function dd($var) {
    echo '<pre>';
    var_dump($var);
    exit;
}
function pr($var) {
    echo '<pre>';
    print_r($var);
    exit;
}