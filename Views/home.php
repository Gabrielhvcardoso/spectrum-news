<?php
use Controllers\HomeController;
$posts = HomeController::getPosts();

$col1 = array_slice($posts, 0, 2); // 2
$col2 = array_slice($posts, 2, 4); // 4
$col3 = array_slice($posts, 6, 1); // 1
$col4 = array_slice($posts, 7, 2); // 2
$rest = array_slice($posts, 9);

?>

<div class="base-container">
  <?php
    if (!empty($col1) && !empty($col2) && !empty($col3) && !empty($col4)) {
  ?>
    <div id="news-grid">
      <?php
        if (!empty($col1)) {
          ?>
            <div class="news-grid-column">
              <?php
                foreach ($col1 as $p) {
                  ?>
                    <article onclick="openArticle(<?= $p['id'] ?>)">
                      <img src="<?= $p["image"] ?>" />
                      <h4><?= $p["title"] ?></h4>
                      <span><?= $p["description"] ?></span>
                    </article>                  
                  <?php
                }
              ?>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col2)) {
          ?>
            <div class="news-grid-column">
              <?php
                foreach ($col2 as $p) {
                  ?>
                    <article onclick="openArticle(<?= $p['id'] ?>)">
                      <h4><?= $p["title"] ?></h4>
                      <span><?= $p["description"] ?></span>
                    </article>                  
                  <?php
                }
              ?>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col3)) {
          ?>
            <div class="news-grid-column">
              <?php
                foreach ($col3 as $p) {
                  ?>
                    <article onclick="openArticle(<?= $p['id'] ?>)" class="emphasis">
                      <img src="<?= $p["image"] ?>" />
                      <h3><?= $p["title"] ?></h3>
                      <span><?= $p["description"] ?></span>
                    </article>
                  <?php
                }
              ?>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col4)) {
          ?>
            <div class="news-grid-column">
              <?php
                foreach ($col4 as $p) {
                  ?>
                    <article onclick="openArticle(<?= $p['id'] ?>)">
                      <img src="<?= $p["image"] ?>" />
                      <h4><?= $p["title"] ?></h4>
                      <span><?= $p["description"] ?></span>
                    </article>
                  <?php
                }
              ?>
            </div>
          <?php
        }
      ?>
    </div>
  <?php
    } else {
      // Just use all posts in rest
      $rest = $posts;
    }
  ?>

  <!-- Others -->

  <section id="article-list">
    <?php
      if (!empty($col1) && !empty($col2) && !empty($col3) && !empty($col4) && !empty($rest)) {
        ?>
          <h1>Mais notícias</h1>
        <?php
      }
    ?>

    <?php
      foreach ($rest as $p) {
        ?>
          <article onclick="openArticle(<?= $p['id'] ?>)">
            <img src="<?= $p["image"] ?>" />
            <div class="info">
              <h2><?= $p["title"] ?></h2>
              <span><?= $p["description"] ?></span>
            </div>
          </article>
        <?php
      }
    ?>
  </section>
</div>
