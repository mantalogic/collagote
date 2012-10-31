<?php

define('BASE','learning/php');

/*
  function getContent()
  desc :
    Digunakan untuk mengambil uri_path
    contoh : http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
    uri = /tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
*/
function getContent(){
    // get uri
    $uri = $_SERVER['REQUEST_URI'];
    
    // memisahkan uri berdasarkan (/) menjadi array 
    $token = explode('/',$uri);
    
    // filtering uri local untuk base_path : mencegah keambiguan nama domain
    $base_token = explode('/', constant('BASE'));
    
    $token = $token[sizeof($base_token)+1];
    
    // memisahkan token berdasar extensi
    $arr_uri = explode('.',$token);
    
    // main part untuk ambil content
    // bisa diganti dengan content dari database
    if(count($arr_uri) == 2 or count($arr_uri) == 1){
        $uri_name = $arr_uri[0].".php";
        $uri_subfix = $arr_uri[1];
        if(checkUrlFiles($uri_name)){
            include 'content/'.$uri_name;
        } else if(empty($token)) {
            include 'content/index.php';
        } else {
            include 'template/404.htm';
        }
    } else if(empty($token)) {
        include 'content/index.php';
    }
    
}

function checkUrlFiles($file){
        if(file_exists('content/'.$file)){
            return true;
        } else {
            return false;
        }
}


?>