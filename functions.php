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
 * M S Shahnewaz Theme Supports
 **********************************************************************************************************************/

add_theme_support( 'post-thumbnails' );
add_theme_support( 'stories-post-thumbnails' );
add_theme_support( 'responsive-embeds' );

/*
 * 360x240 = col-md-4 Land
 * 360x540 = col-md-4 Port
 *
 * 555x370 = col-md-6 Land
 * 555x833 = col-md-6 Port
 *
 * 263x175 = col-md-3 Land
 * 263x394 = col-md-3 Port
 */

add_image_size( 'col-md-4-landscape', 360, 240, true );
add_image_size( 'col-md-4-portrait', 360, 540, true );

add_image_size( 'col-md-6-landscape', 555, 370, true );
add_image_size( 'col-md-6-portrait', 555, 833, true );

add_image_size( 'col-md-3-landscape', 263, 175, true );
add_image_size( 'col-md-3-portrait', 263, 394, true );


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


/***********************************************************************************************************************
 * Register Custom Post Type (Stories) on Theme
 **********************************************************************************************************************/

if ( ! function_exists( 'create_work_post_type' ) ) {

    function create_work_post_type() {

        register_post_type( 'works',
            array(
                'labels' => array(
                    'name' 				  => __( 'Works' ),
                    'singular_name' 	  => __( 'Work' ),
                    'menu_name'           => __( 'Works', 'M_S_Shahnewaz_Dark' ),
                    'all_items'           => __( 'All Works', 'M_S_Shahnewaz_Dark' ),
                    'view_item'           => __( 'View Work', 'M_S_Shahnewaz_Dark' ),
                    'add_new_item'        => __( 'Add New Work', 'M_S_Shahnewaz_Dark' ),
                    'add_new'             => __( 'Add New', 'M_S_Shahnewaz_Dark' ),
                    'edit_item'           => __( 'Edit Work', 'M_S_Shahnewaz_Dark' ),
                    'update_item'         => __( 'Update Work', 'M_S_Shahnewaz_Dark' ),
                    'search_items'        => __( 'Search Work', 'M_S_Shahnewaz_Dark' ),
                    'not_found'           => __( 'Not Found', 'M_S_Shahnewaz_Dark' ),
                    'not_found_in_trash'  => __( 'Not found in Trash', 'M_S_Shahnewaz_Dark' ),
                ),
                'rewrite'             => array('slug' => 'work'),
                'menu_icon'           => 'dashicons-portfolio',
                'description'         => __( 'Stories and Series', 'M_S_Shahnewaz_Dark' ),
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
                'hierarchical'        => false,
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_nav_menus'   => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => 7,
                'can_export'          => true,
                'has_archive'         => true,
                'exclude_from_search' => false,
                'publicly_queryable'  => true,
                'capability_type'     => 'page',
                'show_in_rest'        => true,
            )
        );

        register_taxonomy('types', array('works'), array(
            'hierarchical' => true,
            'labels'       => array(
                'name'              => _x( 'Work Types', 'taxonomy general name' ),
                'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
                'search_items'      =>  __( 'Search Type' ),
                'all_items'         => __( 'All Types' ),
                'edit_item'         => __( 'Edit Work Type' ),
                'update_item'       => __( 'Update Work Type' ),
                'add_new_item'      => __( 'Add New Type' ),
                'new_item_name'     => __( 'New Work Type' ),
                'menu_name'         => __( 'Types' ),
            ),
            'show_ui'           => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'subject' ),
        ));
    }

    add_action( 'init', 'create_work_post_type' );
}

if ( ! function_exists( 'create_commercial_post_type' ) ) {

	function create_commercial_post_type() {

		register_post_type( 'commercials',
			array(
				'labels' => array(
					'name' 				  => __( 'Commercials' ),
					'singular_name' 	  => __( 'Commercial' ),
					'menu_name'           => __( 'Commercials', 'M_S_Shahnewaz_Dark' ),
					'all_items'           => __( 'All Commercials', 'M_S_Shahnewaz_Dark' ),
					'view_item'           => __( 'View Commercial', 'M_S_Shahnewaz_Dark' ),
					'add_new_item'        => __( 'Add New Commercial', 'M_S_Shahnewaz_Dark' ),
					'add_new'             => __( 'Add New', 'M_S_Shahnewaz_Dark' ),
					'edit_item'           => __( 'Edit Commercial', 'M_S_Shahnewaz_Dark' ),
					'update_item'         => __( 'Update Commercial', 'M_S_Shahnewaz_Dark' ),
					'search_items'        => __( 'Search Commercial', 'M_S_Shahnewaz_Dark' ),
					'not_found'           => __( 'Not Found', 'M_S_Shahnewaz_Dark' ),
					'not_found_in_trash'  => __( 'Not found in Trash', 'M_S_Shahnewaz_Dark' ),
				),
				'rewrite'             => array('slug' => 'commercial'),
				'menu_icon'           => 'dashicons-businesswoman',
				'description'         => __( 'Stories and Series', 'M_S_Shahnewaz_Dark' ),
				'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 7,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
				'show_in_rest'        => true,
			)
		);

		register_taxonomy('genres', array('commercials'), array(
			'hierarchical' => true,
			'labels'       => array(
				'name'              => _x( 'Commercial Genres', 'taxonomy general name' ),
				'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
				'search_items'      =>  __( 'Search Genre' ),
				'all_items'         => __( 'All Genre' ),
				'edit_item'         => __( 'Edit Commercial Genre' ),
				'update_item'       => __( 'Update Commercial Genre' ),
				'add_new_item'      => __( 'Add New Genre' ),
				'new_item_name'     => __( 'New Commercial Genre' ),
				'menu_name'         => __( 'Genres' ),
			),
			'show_ui'           => true,
			'show_in_rest'      => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'subject' ),
		));
	}

	add_action( 'init', 'create_commercial_post_type' );
}

/***********************************************************************************************************************
 * Apply filter for custom post type
 **********************************************************************************************************************/

if ( ! function_exists( 'the_content_without_image' ) ) {

    function the_content_without_image() {

        global $post;
        if($post->post_type == 'portfolios' || $post->post_type == 'commercials') {
            $content = get_the_content();
            $content = preg_replace( '/<figure[^>]+./', '', $content );
            $content = preg_replace( '/<ul[^>]+./', '', $content );
            $content = preg_replace( '/<li[^>]+./', '', $content );
            $content = preg_replace( '/<img[^>]+./', '', $content );
            return $content;
        }

        return get_the_content();
    }

    add_filter('the_content', 'the_content_without_image');
}


/***********************************************************************************************************************
 * Image caption render function
 **********************************************************************************************************************/
if ( ! function_exists( 'get_image_caption' ) ) {

	function get_image_caption($id) {
		$caption = '';
		if(wp_get_attachment_metadata($id)['image_meta']['created_timestamp']) {
			$date = ' Date - ' . date( 'jS F, Y', wp_get_attachment_metadata( $id )['image_meta']['created_timestamp'] );
		}
		if(cs_get_options()['mss_misc']['mss_misc_is_caption']) {
			$caption = wp_get_attachment_caption ($id) . ' ';
		}

		echo $caption . 'Photo by ' . get_userdata(1)->display_name . $date;
	}
}


/***********************************************************************************************************************
 * Image sort by date in gallery except portfolio
 **********************************************************************************************************************/
if ( ! function_exists( 'sort_by_date' ) ) {

	function sort_by_date($ids) {
		foreach ($ids as $id) {
			$images[$id] = (wp_get_attachment_metadata($id)['image_meta']['created_timestamp']) ? date( 'Ymd', wp_get_attachment_metadata( $id )['image_meta']['created_timestamp'] ) : 0;
		}
		arsort($images);

		return $images;
	}
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