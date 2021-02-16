<?php 
include_once __DIR__ . '/Users.php';

class Posts extends Users{
  public $title;
  public $content;
  public $topic;
  public $tags;
  public $create_time;
  public $update_time;
  public $status;

  
  public function __construct(string $name, string $surname, int $age, string $email, string $title, string $content, string $topic, string $tags, string $create_time, string $update_time, string $status = 'Posted') {
    parent::__construct($name, $surname, $age, $email);
    $this->title = $title;
    $this->content = $content;
    $this->topic = $topic;
    $this->tags = $tags;
    $this->create_time = $create_time;
    $this->update_time = $update_time;
    $this->status = $status;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function getTopic()
  {
    return $this->topic;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function getCreate_time()
  {
    return $this->create_time;
  }

  public function getUpdate_time()
  {
    return $this->update_time;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
?>