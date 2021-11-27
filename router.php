<?php

$path = str_replace("/spectrum", "", $_SERVER['REQUEST_URI']);

if ($path === "/") {
  include('./Views/home.php');
} else if (strpos($path, "category") !== false) {
  include('./Views/category-articles.php');
} else {
  include('./Views/article.php');
}

?>