<?php

namespace eSaner\Content\Tax;

use PostTypes\Taxonomy;

$project_type = new Taxonomy('project-type');

$project_type->posttype('project');
$project_type->register();
