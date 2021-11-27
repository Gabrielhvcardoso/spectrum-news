<?php

use Controllers\HomeController;
$categories = HomeController::indexCategories();

?>

<header id="app-header">
  <a href="/spectrum" class="logo" translate="no">Spectrum</a>
</header>

<nav id="app-categories">
  <div id="app-categories-wrapper">
    <?php
      foreach ($categories as $c) {
        ?>
          <a href="/spectrum/category-<?= $c["id"] ?>"><?= $c["title"] ?></a>
        <?php
      }
    ?>
  </div>
</nav>