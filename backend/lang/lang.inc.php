<?php

// allow language setting via get parameter
if(!empty($_GET['lang'])) {
  $lang = $_GET['lang'];
  
  setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if(!empty($_COOKIE['lang'])) { // language cookie
  $lang = $_COOKIE['lang'];
} else {
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang-en.inc.php';
  $lang_name = 'English';
  break;
 
  case 'de':
  $lang_name = 'Deutsch';
  $lang_file = 'lang-de.inc.php';
  break;
 
  default:
  $lang = 'en';
  $lang_file = 'lang-en.inc.php';
  $lang_name = 'English';
}


$l = array();

// include English language file every time as a fallback
include('lang-en.inc.php');

include_once($lang_file);

function l($key) {
  global $l;
  if (empty($l[$key])) {
    echo "!!! Language Key Not Found !!! (" . $key . ")";
  }
  else {
    echo $l[$key];
  }
}

?>
