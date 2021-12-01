<?php

namespace Models;

use Classes\Post;
use Database\ConnectionPDO;

class PostDAO {
  public function read(int $id) {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT * FROM post WHERE id = :id";

    $statement = $connection->prepare($query);

    $statement->bindValue(":id", $id, \PDO::PARAM_INT);
    $statement->execute();

    $post = $statement->fetch();
    return $post;
  }

  public function readByCategory(int $categoryId, int $offset = 0, int $limit = 10) {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT
      id,
      title,
      image,
      TO_CHAR(timestamp, 'DD/MM/YYYY HH24:MI:SS') AS timestamp,
      description FROM post
    WHERE \"categoryId\" = :id
    ORDER BY timestamp DESC, id DESC
    OFFSET :offset LIMIT :limit";

    $statement = $connection->prepare($query);
    $statement->bindValue(":id", $categoryId, \PDO::PARAM_INT);
    $statement->bindValue(":offset", $offset, \PDO::PARAM_INT);
    $statement->bindValue(":limit", $limit, \PDO::PARAM_INT);
    $statement->execute();

    $posts = $statement->fetchAll();
    return $posts;
  }
}
