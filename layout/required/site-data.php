<?php
/* Collect server variables */
$site['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

/* Require custom functions */
require_once 'layout/reusable/functions.php';
