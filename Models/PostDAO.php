<?php

namespace Models;

use Classes\Post;
use Database\ConnectionPDO;

class PostDAO {
  public function readAll(int $offset = 0, int $limit = 10) {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT
      id,
      title,
      image,
      TO_CHAR(timestamp, 'DD/MM/YYYY HH24:MI:SS') AS timestamp,
      description FROM post
    ORDER BY id DESC
    OFFSET :offset LIMIT :limit";

    $statement = $connection->prepare($query);
    $statement->bindValue(":offset", $offset, \PDO::PARAM_INT);
    $statement->bindValue(":limit", $limit, \PDO::PARAM_INT);
    $statement->execute();

    $posts = $statement->fetchAll();
    return $posts;

  }

  public function read(int $id) {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT
        p.*,
        TO_CHAR(p.timestamp, 'DD/MM/YYYY HH24:MI:SS') AS timestamp,
        a.name AS \"authorName\",
        a.image AS \"authorAvatar\",
        c.id AS \"categoryId\",
        c.title AS \"categoryTitle\"
      FROM post AS p
      INNER JOIN author AS a ON p.author_id = a.id
      INNER JOIN category AS c ON p.category_id = c.id
      WHERE p.id = :id";

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
    WHERE category_id = :id
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

  public function create(int $authorId, array $postData) {
    $connection = ConnectionPDO::getInstance();
    $query = "INSERT INTO post (author_id, category_id, title, timestamp, description, content, image) VALUES (:authorId, :categoryId, :title, NOW(), :description, :content, :image)";

    $statement = $connection->prepare($query);
    $statement->bindValue(":authorId", $authorId, \PDO::PARAM_INT);
    $statement->bindValue(":categoryId", $postData["categoryId"], \PDO::PARAM_INT);
    $statement->bindValue(":title", $postData["title"], \PDO::PARAM_STR);
    $statement->bindValue(":image", $postData["image"], \PDO::PARAM_STR);
    $statement->bindValue(":content", $postData["content"], \PDO::PARAM_STR);
    $statement->bindValue(":description", $postData["description"], \PDO::PARAM_STR);

    return $statement->execute();
  }
}
