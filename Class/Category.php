<?php
namespace Classes;

class Category {
  private $title;
  private $description;

  public function getTitle(): string {
    return $this->title;
  }

  public function getDescription(): string {
    return $this->description;
  }
}

?>