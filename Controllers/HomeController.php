<?php

namespace Controllers;

use Models\CategoryDAO;

class HomeController {
  public static function indexCategories() {
    $categoryModel = new CategoryDAO();
    return $categoryModel->readAll();
  }

  public static function getCategory(int $id) {
    $categoryModel = new CategoryDAO();
    return $categoryModel->read($id);
  }
}
