<?php
use Controllers\HomeController;
$posts = HomeController::getPosts();
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
              <article onclick="openArticle(1)">
                <img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
            
              <article onclick="openArticle(1)">
                <img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col2)) {
          ?>
            <div class="news-grid-column">
              <article onclick="openArticle(1)">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
        
              <article onclick="openArticle(1)">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
              
              <article onclick="openArticle(1)">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
        
              <article onclick="openArticle(1)">
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col3)) {
          ?>
            <div class="news-grid-column">
              <article onclick="openArticle(1)" class="emphasis">
                <img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
            </div>
          <?php
        }
      ?>

      <?php
        if (!empty($col4)) {
          ?>
            <div class="news-grid-column">
              <article onclick="openArticle(1)">
                <img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
        
              <article onclick="openArticle(1)">
                <img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos velit architecto recusandae. Qui, nobis ducimus autem odio iure ullam sit eum ipsa architecto voluptas assumenda ad, quae dolorem. Perspiciatis, debitis? </span>
              </article>
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
