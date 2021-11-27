<?php

use Controllers\HomeController;
$categoryId = intval(str_replace("/spectrum/category-", "", $_SERVER['REQUEST_URI']));
$category = HomeController::getCategory($categoryId);

?>

<div class="base-container">
  <header>
    <h1><?= $category["title"] ?></h1>
    <span><?= $category["description"] ?></span>
  </header>
</div>