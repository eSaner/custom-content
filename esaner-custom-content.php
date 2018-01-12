<?php
/*
 * Plugin Name: eSaner Custom Content
 * Description: Custom post types, taxonomies, widgets and core modifications.
 * Author: eSaner
 * Version: 0.1.0
 * Author URI: http://esaner.com
 */

namespace eSaner\Content;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Autoload
require __DIR__ . '/vendor/autoload.php';

// App
foreach (glob(__DIR__ . '/src/*/*.php') as $file) {
  require_once $file;
}
