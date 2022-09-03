<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}


/**
 * The Bootstrap Basic main class.
 */
require_once get_template_directory() . '/inc/BootstrapBasic.php';


/**
 * Register commonly use scripts and styles.
 */
$BootstrapBasic = new \BootstrapBasic();
unset($BootstrapBasic);


if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup() 
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * 
         * copy from underscores theme
         */
        load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

        // add theme support title-tag
        add_theme_support('title-tag');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bootstrap-basic'),
        ));
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu dropdown-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 
        // add post formats support
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // add support custom background
        add_theme_support(
            'custom-background', 
            apply_filters(
                'bootstrap_basic_custom_background_args', 
                array(
                    'default-color' => 'ffffff', 
                    'default-image' => ''
                )
            )
        );

        // @since 1.1 or WordPress 5.0+
        // make gutenberg support. --------------------------------------------------------------------------------------
        // @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/ reference.
        // add wide alignment ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment )
        add_theme_support('align-wide');
        // support default block styles for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#default-block-styles )
        add_theme_support('wp-block-styles');
        // support editor styles ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#editor-styles )
        // this one make appearance in editor more close to Bootstrap 3.
        add_theme_support('editor-styles');
        // support responsive embeds for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content )
        add_theme_support('responsive-embeds');
        // end make gutenberg support. ---------------------------------------------------------------------------------
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit() 
    {
        register_sidebar(array(
            'name' => __('Sidebar right', 'bootstrap-basic'),
            'id' => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar left', 'bootstrap-basic'),
            'id' => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => __('Header right', 'bootstrap-basic'),
            'id' => 'header-right',
            'description' => __('Header widget area on the right side next to site title.', 'bootstrap-basic'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));


    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     * 
     * @global \WP_Scripts $wp_scripts
     */
    function bootstrapBasicEnqueueScripts() 
    {
        global $wp_scripts;

        wp_enqueue_style('bootstrap-style');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');

        // js that is useful for development.
        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.6.0-20190314', true);
        // js that is useful for old browsers.
        wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3', true);
        $wp_scripts->add_data('html5-shiv-script', 'conditional', 'lte IE 9');
        wp_enqueue_script('html5-shiv-script');
        
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_enqueue_script('bootstrap-script');
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.1.3', true);
        wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri(), array(), '1.1.3');

        // move jquery to bottom ( https://wordpress.stackexchange.com/a/225936/41315 )
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}


/**
 * Make WordPress 5 (Gutenberg) editor support Bootstrap CSS.
 */
require_once get_template_directory() . '/inc/BootstrapBasicWp5.php';
$BbWp5 = new BootstrapBasicWp5();
unset($BbWp5);


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';



function wpschool_text_shortcode() {
    return '<a href="#order" data-toggle="modal" class="btn btn-primary btn-lg mt30" role="button">Заказать <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>';
}
add_shortcode('zakaz', 'wpschool_text_shortcode');


/** Добавление колонки с ID ПОСТОВ (страниц) в админку И тру и ats **/
add_filter('manage_pages_columns', 'my_ats_id', 5);               // для страниц
add_action('manage_pages_custom_column', 'my_ats_custom', 5, 2);  // для страниц
add_filter('manage_posts_columns', 'my_ats_id', 5);               // для записей
add_action('manage_posts_custom_column', 'my_ats_custom', 5, 2);  // для записей
//для произвольных типов
//add_filter('manage_word_columns', 'my_ats_id', 5);                // для произвольных типов записей - word - поставьте ваше имя
//add_action('manage_word_custom_column', 'my_ats_custom', 5, 2);   // для произвольных типов записей - word - поставьте ваше имя
//для произвольных типов - вывод ID
function my_ats_id($args){
$args['post_page_id'] = 'ID';
return $args;
}
function my_ats_custom($column, $id){
if($column === 'post_page_id'){
echo $id;
} }
/** Добавление колонки с ID ПОСТОВ (страниц) в админку **/
add_filter( 'embed_defaults', 'bigger_embed_size' );
         
function bigger_embed_size()
{
return array( 'width' => 640, 'height' => 480 );
}
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки сайта',
		'menu_title'	=> 'Настройки сайта',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}