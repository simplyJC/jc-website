<?php
/**
 * jcwebsite's functions and definitions
 *
 * @package jcwebsite
 * @since jcwebsite 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
    $content_width = 800;
}
/* pixels */

if (!function_exists('jcwebsite_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
    function jcwebsite_setup()
{

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('jcwebsite', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to &lt;head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'jcwebsite'),
            'secondary' => __('Secondary Menu', 'jcwebsite'),
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
        //Add logo
        $defaults = array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        );

        //Enable logo image support
        add_theme_support('custom-logo', $defaults);
        //Enable Dynamic Title Tag Support
        add_theme_support('title-tag');

    }
endif;
// jcwebsite_setup
add_action('after_setup_theme', 'jcwebsite_setup');

//adding css and JS
function jcwebsite_add_theme_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), '1.1', 'all');

    wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.js', null, 1.1, true);
    //Single Font
    wp_enqueue_style('custom_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', [], null);

    //Applying multiple fonts
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,400&family=Neuton:ital,wght@0,300;0,400;0,700;1,400&display=swap', [], null );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'jcwebsite_add_theme_scripts');
//Custom Function to show About Me page in HomePage
function custom_show_page_excerpt($path, $length)
{
    $post = get_page_by_path($path);
    $content = apply_filters('the_content', $post->post_content);
    echo wp_trim_words($content, $length);
}
function custom_show_page_title($id)
{
    $post = get_post($id);
    $title = apply_filters('the_content', $post->post_title);
    echo $title;
}

add_filter('acf/settings/remove_wp_meta_box', '__return_false');
