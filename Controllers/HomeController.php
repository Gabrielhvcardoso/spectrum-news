<?php

namespace Controllers;

use Models\CategoryDAO;
use Models\PostDAO;

class HomeController {
  // Categories

  public static function indexCategories() {
    $categoryModel = new CategoryDAO();
    return $categoryModel->readAll();
  }

  public static function getCategory(int $id) {
    $categoryModel = new CategoryDAO();
    return $categoryModel->read($id);
  }

  // Posts

  public static function getPost(int $id) {
    $postModel = new PostDAO();
    return $postModel->read($id);
  }

  public static function getPosts(int $offset = 0, int $limit = 10) {
    $postModel = new PostDAO();
    return $postModel->readAll($offset, $limit);
  }

  public static function getCategoryPosts(int $id, int $offset = 0, int $limit = 10) {
    $postModel = new PostDAO();
    return $postModel->readByCategory($id);
  }
}
