<?php 

class Users {
  public $name;
  public $surname;
  public $age;
  public $email;
  public $password;

  public function __construct(string $name, string $surname, int $age, string $email ) {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->email = $email;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getEmail()
  {
    return $this->email;
  }

}
?>