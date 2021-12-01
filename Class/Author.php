<?php
namespace Classes;

class Author {
  private $name;
  private $image;
  private $login;
  private $password;

  public function getName(): string {
    return $this->name;
  }

  public function getImage(): string {
    return $this->image;
  }
}

?>