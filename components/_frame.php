<?php

function isLocal(){
  $pathArray =  explode('/', $_SERVER['DOCUMENT_ROOT']);
  return in_array('localhost', $pathArray, true);
}

function cssHead(){
    $baseUrl = isLocal() ? "http://localhost/matrimoniala_de_sosete/" : 'https://matrimonialadesosete.ro/';
    return '
        <base href = "' . $baseUrl . '" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">';
}

function canonicalUrl ($dirName) {
  $baseUrl = "https://matrimonialadesosete.ro/";

  if ($dirName === "matrimoniala_de_sosete" || $dirName === "public_html") {
      $dirName = $baseUrl;
  } else {
      $dirName = $baseUrl . $dirName;
  }

  return "<link rel='canonical' href='${dirName}' />";
};

function googleAnalitycs () {
  return "
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src='https://www.googletagmanager.com/gtag/js?id=UA-163320010-1'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-163320010-1');
  </script>
  ";

};

?>