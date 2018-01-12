<?php

namespace eSaner\Content\Core;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue Admin Scripts
 */
add_action('admin_enqueue_scripts', function () {
  wp_register_style('es-admin', plugins_url('admin.css', __FILE__), false, '0.1.2');
  wp_enqueue_style('es-admin');
});

/**
 * Remove Howdy
 */
add_filter('gettext', function ($translated, $text, $domain) {

    if (!is_admin() || 'default' != $domain)
        return $translated;

    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy,', '', $translated);

    return $translated;
}, 10, 3);