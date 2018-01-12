<?php

namespace eSaner\Content\CPT;

use PostTypes\PostType;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Project Names
 * Optional. new PostType('$names');
 */
$names = [
    'name' => 'project',
    'singular' => 'Project',
    'plural' => 'Projects',
    'slug' => 'projects'
];

$options = [
  'menu_icon' => 'dashicons-clipboard',
  'supports' => [
    'title',
    'editor',
    'excerpt',
    'thumbnail'
  ],
  'has_archive' => false
];

$projects = new PostType('project', $options);
$projects->register();
