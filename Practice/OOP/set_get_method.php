<?php
class Person {
  private $name;
  function HiHello(){
    print("안녕, 나는 {$this->name}.");
  }

  function setName($_name){
    $this->emptyName($_name);
    $this->name = $_name;
  }

  function getName(){
    return $this->name;
  }
  private function emptyName($__name){
    if (empty($__name)) {
      die('이름이필요해요');
    }
  }
}
$Kim = new Person();
//$Kim->name = "KimsPracite"
$Kim->setName('KimsPracite');
$Kim->getName();
$Kim->HiHello();
 ?>
