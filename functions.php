<?php

function c($exp, $dump = false) {
  echo '<pre>';
  (!$dump ? print_r($exp) : var_dump($exp));
  echo '</pre>';
}

spl_autoload_register(function ($class) {
  //include 'workers/' . $class . '.php';
  include 'workers/' . $class . '.php';
});
