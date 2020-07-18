<?php
/* Collect server variables */
$site['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

/* Require autoload information */
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

/* Require custom functions */
require_once 'layout/reusable/functions.php';

/* Decode composer notations */
$composer = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/composer.json'), true);

/* Prepare variables based on composer notations */
$site['name'] = ucfirst(substr($composer['name'], -9));

/* Decode masthead notations */
$masthead = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/masthead.json'), true);
