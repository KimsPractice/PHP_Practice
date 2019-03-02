<h2>default</h2>
<?php
  class animal {
    function run(){
      print('Running...<br>');
    }

    function breath(){
      print('breating...<br>');
    }
  }

$ani = new animal();
$ani->run();
$ani->breath();


?>
  <h2>inheritance</h2>
<?php
class human extends animal {
  function think(){
    print('thinking...<br>');
  }

  function talk(){
    print('talking...<br>');
  }
}

$man = new human();
$man->run();
$man->breath();
$man->think();

 ?>
