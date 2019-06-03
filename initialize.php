<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH. '/public');

    // Assigning root to a php constant

    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') +7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    // Assigning shared path to php constant

    $shared_end = strpos($_SERVER['SCRIPT_NAME'], '/shared') +7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $shared_end);
    define("SHARED_ROOT", $doc_root);

    require_once ('functions.php');
