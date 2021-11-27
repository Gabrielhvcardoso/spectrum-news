<?php
namespace Classes;

class Post {
  private $title;
  private $timestamp;
  private $image;
  private $content;
  private $description;

  public function getTitle(): string {
    return $this->title;
  }

  public function getTimestamp(): string {
    return $this->timestamp;
  }

  public function getImage(): string {
    return $this->image;
  }

  public function getContent(): string {
    return $this->content;
  }

  public function getDescription(): string {
    return $this->description;
  }
}

?>