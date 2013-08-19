<?php

// Some constants
$template_name = "default";
$template_dir = __DIR__ . "/template/default/";



// Include the Chameleon class
include(__DIR__ . '/lib/Chameleon.php');

use lib\Chameleon;

// Initialize Chameleon
$tpl = new Chameleon($template_name, $template_dir);

// TODO: Define the default (global) variables and objects

// TODO: Define some default variables and objects to use for testing

// Render the page
$tpl->render('index.tpl');