<?php

namespace Models;

use Classes\Category;
use Database\ConnectionPDO;

class CategoryDAO {
  public function readAll() {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT * FROM category ORDER BY title";
    
    $statement = $connection->prepare($query);
    $statement->execute();

    $categories = $statement->fetchAll();
    return $categories;
  }

  public function read(int $id) {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT title, description FROM category WHERE id = :id";
    
    $statement = $connection->prepare($query);

    $statement->bindValue(":id", $id, \PDO::PARAM_INT);
    $statement->execute();

    $category = $statement->fetch();
    return $category;
  }
}
