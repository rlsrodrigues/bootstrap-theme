<?php
/* ==================================== THEME SETTINGS ==================================== */
// Get CSS default (style.css) in theme
add_action('wp_enqueue_scripts', 'bt_enqueue_scripts');
if (!function_exists('bt_enqueue_scripts')):
    function bt_enqueue_scripts() {
        wp_register_style('bt_stylesheet', get_stylesheet_uri());
        wp_enqueue_style('bt_stylesheet');
    }
endif;

// Theme features
add_action('after_setup_theme', 'bt_setup');
if (!function_exists('bt_setup')):

    function bt_setup() {
        // add support for thumbnails.
        add_theme_support('post-thumbnails');
        // add support for dinamic menu, if you needly more menu just copy this line and change informations.
        register_nav_menu('header_menu', 'Menu Cabeçalho');
        // add support for page excerpt's .
        add_post_type_support('page', 'excerpt');
    }
endif;

//add first and last class to dinamic menu's.
add_filter('wp_nav_menu', 'bt_add_first_and_last');
function bt_add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
/* ==================================== THEME EXTRA FUNCTIONS ==================================== */
// Create the better title for pages.
add_filter('wp_title', 'bt_wp_title', 10, 2);
function bt_wp_title($title, $sep = '') {
    global $paged, $page;
    if (is_feed())
        return $title;
    // Site name.
    $title .= get_bloginfo('name');
    // Add the site description for the home.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";
    // Add the number page if needly.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'cec'), max($paged, $page));
    return $title;
}

?>