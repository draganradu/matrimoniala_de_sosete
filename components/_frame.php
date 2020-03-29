<?php

function isLocal(){
  $pathArray =  explode('/', $_SERVER['DOCUMENT_ROOT']);
  return in_array('localhost', $pathArray, true);
}

function cssHead(){
    $baseUrl = isLocal() ? "http://localhost/matrimoniala_de_sosete/" : 'http://www.matrimonialadesosete.ro/';
    return '
        <base href = "' . $baseUrl . '" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">';
}

?>