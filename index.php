<?php
include "config.php";

if(isset($_SERVER['QUERY_STRING'])){
    $URL_QUERIES = array();
    parse_str(@$_SERVER['QUERY_STRING'], $URL_QUERIES);
}

if(isset($_SERVER['PATH_INFO'])){
    $request = $_SERVER["PATH_INFO"];
    $parsed = array_values(array_filter(explode('/' , $request)));
    $PAGE = (count($parsed)==0?HOME_PAGE:$parsed[0]);
}

function baseUrl(){
    $uri = ((!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']))?'https://':'http://');
    $uri .= $_SERVER['HTTP_HOST'];
    return $uri;
}

function currentUrl(){
    return baseUrl().$_SERVER["REQUEST_URI"];
}

function loadFile($dir,$page){
    if(file_exists($dir . "/views/".$page.".php") && $page!='') {
        require $dir . "/views/" . $page . ".php";
    }else{
        require $dir . "/error/404.php";
    }
}

//echo "<pre>";print_r($_SERVER);
require __DIR__ . "/resources/template.php";