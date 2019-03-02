<?php
class person{
  private $name;
  private static $count = 0;
    function __construct($name){
      $this->name = $name;
      self::$count += 1;
    }

    function enter(){
      echo "<h2>".$this->name."님께서".self::$count."번째로 입장하셨습니다.<h2>";
    }

    static function getCount(){
      echo self::$count."명이 입장하였습니다.";
    }
}

$person = new person('KimsPracite');
$person->enter();
$person1 = new person('Pracite');
$person1->enter();
$person2 = new person('Kims');
$person2->enter();
$person3 = new person('Poppy');
$person3->enter();
$person4 = new person('headache');
$person4->enter();

echo person::getCount();;
 ?>
