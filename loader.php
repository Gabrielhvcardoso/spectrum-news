<?php

function loader($class) {
  $class_file = DIR . DS . $class . ".php";
  if (file_exists($class_file)) {
    require($class_file);
  } else {
    foreach(AUTOLOAD_CLASSES as $path) {
      $class_file = $path . DS . $class . ".php";
      if (file_exists($class_file)) require($class_file);
    }
  }
}

spl_autoload_register('loader');
