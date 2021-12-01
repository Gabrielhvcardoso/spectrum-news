<?php

namespace Models;

use Classes\Author;
use Database\ConnectionPDO;

class AuthorDAO {
  public function findByCredentials(string $login, string $password): ?int {
    $connection = ConnectionPDO::getInstance();
    $query = "SELECT id FROM author WHERE login = :login AND password = :password";
    
    $statement = $connection->prepare($query);

    $statement->bindValue(":login", $login, \PDO::PARAM_STR);
    $statement->bindValue(":password", $password, \PDO::PARAM_STR);
    $statement->execute();

    $author = $statement->fetch();
    return !empty($author) ? $author["id"] : null;
  }
}
