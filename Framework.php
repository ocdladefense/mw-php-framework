<?php

if(!defined("MEDIAWIKI")) die();

if(!defined("BASE_PATH")) die("Undefined constant: BASE_PATH. Check that BASE_PATH is defined (for example, in LocalSettings.php) and that it points to the root directory of this MediaWiki installation.");

define("CACHE_DIR",BASE_PATH."/cache");

# Autoload classes and files
$wgAutoloadClasses["Application"] = __DIR__ . "/includes/Application.php";
require __DIR__ . '/includes/globals/cache.php';
require __DIR__ . '/includes/globals/authorization.php';