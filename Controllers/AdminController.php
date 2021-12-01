<?php

namespace Controllers;

use Models\AuthorDAO;
use Models\PostDAO;

class AdminController {
  public static function authorize(string $login, string $password) {
    $authorModel = new AuthorDAO();
    $authorId = $authorModel->findByCredentials($login, $password);

    if (!empty($authorId)) {
      if (!isset($_SESSION)) session_start();
      $_SESSION['id'] = $authorId;
    }
  }

  public static function createPost(int $authorId, array $postData) {
    $fields = ["title", "categoryId", "image", "description", "content"];

    foreach ($fields as $f) {
      if (!isset($postData[$f])) {
        throw new Exception("\$postData does not has $f field");
      }
    }

    PostDAO::create($authorId, $postData);
  }
}
