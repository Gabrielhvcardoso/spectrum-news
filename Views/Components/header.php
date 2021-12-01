<?php

use Controllers\HomeController;
$categories = HomeController::indexCategories();

$categoryId = intval(str_replace("/spectrum/category-", "", $_SERVER['REQUEST_URI']));

?>

<header id="app-header">
  <a href="/spectrum" class="logo" translate="no">Spectrum</a>
</header>

<nav id="app-categories">
  <div id="app-categories-wrapper">
    <?php
      foreach ($categories as $c) {
        ?>
          <a href="/spectrum/category-<?= $c["id"] ?>"
             <?= $categoryId === $c["id"] ? "class=\"active\"" : "" ?>
          ><?= $c["title"] ?></a>
        <?php
      }
    ?>
  </div>
</nav>