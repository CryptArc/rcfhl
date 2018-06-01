<?php
/**
 * rcfhl-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rcfhl-theme
 */

if ( ! function_exists( 'rcfhl_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rcfhl_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rcfhl-theme, use a find and replace
		 * to change 'rcfhl-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rcfhl-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rcfhl-theme' ),
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rcfhl_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
	}
endif;
add_action( 'after_setup_theme', 'rcfhl_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rcfhl_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rcfhl_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'rcfhl_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rcfhl_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rcfhl-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rcfhl-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rcfhl_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rcfhl_theme_scripts() {
	wp_enqueue_style( 'rcfhl-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rcfhl-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rcfhl-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js' );

	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.js' );
	
	wp_enqueue_script ( 'rcfhl-theme-js', get_template_directory_uri() . '/js/rcfhl-scripts.js' );
	
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/slick/slick.css' );
	
// 	wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );

	wp_enqueue_style( 'form-icon-styles', get_template_directory_uri() . '/css/style-icons.min.css' );
	
	wp_enqueue_style( 'form-styles', get_template_directory_uri() . '/css/style.min.css' );
	
	wp_enqueue_style( 'rcfhl-styles', get_template_directory_uri() . '/css/rcfhl-styles.css' );
	
	wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons' );
	
	
	
}
add_action( 'wp_enqueue_scripts', 'rcfhl_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* ================= ACF Options =======================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Options',
		'menu_title'	=> 'Global Options',
		'menu_slug' 	=> 'global-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'global-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Repeated Sections',
		'menu_title'	=> 'Repeated Sections',
		'parent_slug'	=> 'global-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'global-options',
	));
	
}

/* ================= Gravity Forms Dynamic Teams Dropdown =======================*/
 
add_filter( 'gform_pre_render', 'populate_teams' );
add_filter( 'gform_pre_validation', 'populate_teams' );
add_filter( 'gform_pre_submission_filter', 'populate_teams' );
add_filter( 'gform_admin_pre_render', 'populate_teams' );

function populate_teams( $form ) {
 
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'post_custom_field' || strpos( $field->cssClass, 'populate-teams' ) === false ) {
            continue;
        }
 
        // you can add additional parameters here to alter the posts that are retrieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $posts = get_posts( 'post_type=sp_team&numberposts=-1' );
 
        $choices = array();
 
        foreach ( $posts as $post ) {
            $choices[] = array( 'text' => $post->post_title, 'value' => $post->post_title );
        }
 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'Select a Team';
        $field->choices = $choices;
 
    }
 
    return $form;
}

/* ================= Gravity Forms Dynamic Seasons Dropdown =======================*/
 
add_filter( 'gform_pre_render', 'populate_seasons' );
add_filter( 'gform_pre_validation', 'populate_seasons' );
add_filter( 'gform_pre_submission_filter', 'populate_seasons' );
add_filter( 'gform_admin_pre_render', 'populate_seasons' );

function populate_seasons( $form ) {
 
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'post_custom_field' || strpos( $field->cssClass, 'populate-seasons' ) === false ) {
            continue;
        }
 
        // you can add additional parameters here to alter the posts that are retrieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $seasons = get_terms( 'sp_season', array(
			'hide_empty' => 0
		) );
		 
        $choices = array();
 
        foreach ( $seasons as $season ) {
            $choices[] = array( 'text' => $season->name, 'value' => $season->name );
        }
 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'Select a Season';
        $field->choices = $choices;
 
    }
 
    return $form;
}

/* ================= Gravity Forms Dynamic Leagues Dropdown =======================*/
 
add_filter( 'gform_pre_render', 'populate_league' );
add_filter( 'gform_pre_validation', 'populate_league' );
add_filter( 'gform_pre_submission_filter', 'populate_league' );
add_filter( 'gform_admin_pre_render', 'populate_league' );

function populate_league( $form ) {
 
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'post_custom_field' || strpos( $field->cssClass, 'populate-league' ) === false ) {
            continue;
        }
 
        // you can add additional parameters here to alter the posts that are retrieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $leagues = get_terms( 'sp_league', array(
			'hide_empty' => 0
		) );
		 
        $choices = array();
 
        foreach ( $leagues as $league ) {
            $choices[] = array( 'text' => $league->name, 'value' => $league->name );
        }
 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'Select a League';
        $field->choices = $choices;
 
    }
 
    return $form;
}

/* ================= Gravity Forms + Stripe: Create Customer =======================*/

add_filter( 'gform_stripe_customer_id', function ( $customer_id, $feed, $entry, $form ) {
    if ( rgars( $feed, 'meta/transactionType' ) == 'product' && rgars( $feed, 'meta/feedName' ) == 'Create Customer' ) {
        $customer_meta = array();
		
// 		$cust_first = rgars ( $feed, 'meta/metaData/3/value' );
// 		$cust_last = rgars ( $feed, 'meta/metaData/4/value' );
// 		$time_stamp = time();
		$email_field = rgars( $feed, 'meta/metaData/0/value' );
		$cust_name = rgars ( $feed, 'meta/metaData/5/value' );
		$cust_season = rgars ( $feed, 'meta/metaData/1/value' );
		$cust_team = rgars ( $feed, 'meta/metaData/2/value' );
		$cust_phone = rgars ( $feed, 'meta/metaData/6/value' );
// 		$cust_id = $cust_first . '_' . $cust_last;

        if ( ! empty( $email_field ) && strtolower( $email_field ) !== 'do not send receipt' ) {
            $customer_meta['email'] = gf_stripe()->get_field_value( $form, $entry, $email_field );
            $customer_meta['metadata[Name]'] = gf_stripe()->get_field_value( $form, $entry, $cust_name );
            $customer_meta['metadata[Season]'] = gf_stripe()->get_field_value( $form, $entry, $cust_season );
            $customer_meta['metadata[Team]'] = gf_stripe()->get_field_value( $form, $entry, $cust_team );
            $customer_meta['metadata[Phone]'] = gf_stripe()->get_field_value( $form, $entry, $cust_phone );
//          $customer_meta['id'] = gf_stripe()->get_field_value( $form, $entry, $cust_id );
        }
 
        $customer = gf_stripe()->create_customer( $customer_meta, $feed, $entry, $form );
 
        return $customer->id;
    }
 
    return $customer_id;
}, 10, 4 );
 
add_filter( 'gform_stripe_charge_authorization_only', function ( $authorization_only, $feed ) {
    if ( rgars( $feed, 'meta/feedName' ) == 'Create Customer' ) {
        return true;
    }
 
    return $authorization_only;
}, 10, 2 );


/* ================= Gravity Forms + Stripe: Custom Charge Description =======================*/

add_filter( 'gform_stripe_charge_description', 'change_stripe_description', 10, 3 );
function change_stripe_description( $description, $strings, $entry ) {
    return rgar( $entry, '25' ) . ', ' . rgar( $entry, '28' );
}

/* ================= Gravity Forms: Map Field to Field Using Dynamic Population and Param Names/Merge Tags =======================*/

class GWMapFieldToField {
    public $lead = null;
    function __construct( ) {
        add_filter( 'gform_pre_validation', array( $this, 'map_field_to_field' ), 11 );
    }
    function map_field_to_field( $form ) {
        foreach( $form['fields'] as $field ) {
            if( is_array( $field['inputs'] ) ) {
                $inputs = $field['inputs'];
            } else {
                $inputs = array(
                    array(
                    'id' => $field['id'],
                    'name' => $field['inputName']
                    )
                );
            }
            foreach( $inputs as $input ) {
                $value = rgar( $input, 'name' );
                if( ! $value )
                    continue;
                $post_key = 'input_' . str_replace( '.', '_', $input['id'] );
                $current_value = rgpost( $post_key );
                preg_match_all( '/{[^{]*?:(\d+(\.\d+)?)(:(.*?))?}/mi', $input['name'], $matches, PREG_SET_ORDER );
                // if there is no merge tag in inputName - OR - if there is already a value populated for this field, don't overwrite
                if( empty( $matches ) )
                    continue;
                $entry = $this->get_lead( $form );
                foreach( $matches as $match ) {
                    list( $tag, $field_id, $input_id, $filters, $filter ) = array_pad( $match, 5, 0 );
                    $force = $filter === 'force';
                    $tag_field = RGFormsModel::get_field( $form, $field_id );
                    // only process replacement if there is no value OR if force filter is provided
                    $process_replacement = ! $current_value || $force;
                    if( $process_replacement && ! RGFormsModel::is_field_hidden( $form, $tag_field, array() ) ) {
                        $field_value = GFCommon::replace_variables( $tag, $form, $entry );
                        if( is_array( $field_value ) ) {
	                        $field_value = implode( ',', array_filter( $field_value ) );
                        }
                    } else {
                        $field_value = '';
                    }
                    $value = trim( str_replace( $match[0], $field_value, $value ) );
                }
                if( $value ) {
                    $_POST[$post_key] = $value;
                }
            }
        }
        return $form;
    }
    function get_lead( $form ) {
        if( ! $this->lead )
            $this->lead = GFFormsModel::create_lead( $form );
        return $this->lead;
    }
}
new GWMapFieldToField();