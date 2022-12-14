<?php
/**
 * who functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package who
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    if (defined('WP_LOCAL')) {
        define('_S_VERSION', time());
    } else {
        define('_S_VERSION', '1.0.0');
    }
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function who_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on who, use a find and replace
        * to change 'who' to the name of your theme in all the template files.
        */
    load_theme_textdomain('who', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'who'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'who_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'who_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function who_content_width()
{
    $GLOBALS['content_width'] = apply_filters('who_content_width', 640);
}

add_action('after_setup_theme', 'who_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function who_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'who'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'who'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'who_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function who_scripts()
{
    wp_enqueue_style('who-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('who-style', 'rtl', 'replace');

    wp_enqueue_script('who-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    //load only on the fromtend


    wp_enqueue_script('who-custom', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true);

}

add_action('wp_enqueue_scripts', 'who_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

// ---------------------------------------------------------------------------------------------

function bd_parse_post_variables()
{
    // bd_parse_post_variables function for WordPress themes by Nick Van der Vreken.
    // please refer to bydust.com/using-custom-fields-in-wordpress-to-attach-images-or-files-to-your-posts/
    // for further information or questions.
    global $post, $post_var;

    // fill in all types you'd like to list in an array, and
    // the label they should get if no label is defined.
    // example: each file should get label "Download" if no
    // label is set for that particular file.
    $types = array('image' => 'no info available',
        'file' => 'Download',
        'link' => 'Read more...');

    // this variable will contain all custom fields
    $post_var = array();
    foreach (get_post_custom($post->ID) as $k => $v) $post_var[$k] = array_shift($v);

    // creating the arrays
    foreach ($types as $type => $message) {
        global ${'post_' . $type . 's'}, ${'post_' . $type . 's_label'};
        $i = 1;
        ${'post_' . $type . 's'} = array();
        ${'post_' . $type . 's_label'} = array();
        while ($post_var[$type . $i]) {
            echo $type . $i . ' - ' . ${$type . $i . '_label'};
            array_push(${'post_' . $type . 's'}, $post_var[$type . $i]);
            array_push(${'post_' . $type . 's_label'}, $post_var[$type . $i . '_label'] ? htmlspecialchars($post_var[$type . $i . '_label']) : $message);
            $i++;
        }
    }
}

// --------------------------------------------------------------------------------------------------------

/* Ajax Function */


add_action("wp_ajax_product_search", "product_search");
add_action("wp_ajax_nopriv_product_search", "product_search");

function product_search() {
	var_dump( 'here' );
//    if (!empty($keyword) && strlen($keyword) >= 3) :
        $args = [
            'post_type' => 'my_product',
            'post_status' => 'publish',
            'posts_per_page' => -1,
//            'q' => $keyword,
        ];

        $the_query = new WP_Query($args);

            while ($the_query->have_posts()): $the_query->the_post(); ?>

                <?php include 'page-templates/product.php' ?>

            <?php endwhile;

            wp_reset_postdata();

    wp_die();
}


add_action("wp_ajax_filter", "filter");
add_action("wp_ajax_nopriv_filter", "filter");


function filter() {
	var_dump( 'here' );
	$cat_ids = $_REQUEST['category'];
//    $csv_cats = implode(", ", $cat_ids);
//    echo "Showing Results for (Term ID):".$csv_cats;
    $args = array(
        'post_type' => 'my_product',
        'status' => 'publish',
        'category__in' => $cat_ids
    );
    // the query
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php include 'page-templates/product.php' ?>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <?php
    wp_die();

}


add_filter( 'acf/fields/google_map/api', 'my_acf_google_map_api' );
function my_acf_google_map_api( $args ) {
	$args['key'] = 'AIzaSyDtvccU2yCjfCbqiO2T_CIKP2txqGOMfZA';

	return $args;
}

