<?php
    if (strtolower($_SERVER['HTTP_HOST']) == 'localhost') {

        $domain = 'localhost';
        $root = '/le_parchemin_test/';
        
    } else {

        $domain = 'evanforweb.com';
        $root = '/le_parchemin/';

    }
    
    
    $protocol = 'http://';
    $path = $protocol . $domain . $root;

    if (strpos($_SERVER['REQUEST_URI'], $root.'fr/') === 0) {
        $lang = 'fr/';
    } else {
        $lang = 'en/';
    }
    $langpath = $path . $lang;

    $pagepath = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], $root.$lang) + strlen($root.$lang));

    //CONSTANT
    define('PATH' , $langpath);
    define('ROOTPATH', $path);
    define('SHARED_LANGUAGE_IMG_PATH', $path . 'img/shared/');
    define('LANGUAGE_IMG_PATH', $path . 'img/' . $lang . '/');
?>