<?php
/**
 * WPT Parallax Image Effect (WPTPLX)
 *
 * https://wp-tutorials.tech/refine-wordpress/parallax-image-scrolling-effect/
 */

 defined('WPINC') || die();

const WPT_JARALLAX_VERSION = '4.0.0';

function wpt_require_jarallax() {
   global $wpt_has_jarallax_been_required;

   if (!is_admin() && is_null($wpt_has_jarallax_been_required)) {
      $base_url = get_stylesheet_directory_uri() . '/' . pathinfo(__FILE__, PATHINFO_FILENAME) . '/';
      $version = wp_get_theme()->get('Version');

      wp_enqueue_script('jarallax', $base_url . 'ukiyo.min.js', null, WPT_JARALLAX_VERSION, true);
      wp_enqueue_style('jarallaxcss', $base_url . 'ukiyo.css', null, WPT_JARALLAX_VERSION);
      wp_enqueue_script('wpt-jarallax', $base_url . 'wpt-ukiyo.js.', array('jarallax'), $version, true);

      $wpt_has_jarallax_been_required = true;
   }
}
add_action('wp_enqueue_scripts', 'wpt_require_jarallax');

