<?php
$file = new SplFileObject('test.txt');
var_dump($file->fread($file->getSize()));
$file->rewind(); //fread로인한 인덱스초기화
//var_dump($file->fread($file->getSize()));

class testFileObject extends SplFileObject {
    function get_contents(){
      $content = var_dump($this->fread($this->getSize()));
      $this->rewind();
      return $content;
    }
}

$file = new testFileObject('test.txt');
var_dump($file->get_contents());
var_dump($file->get_contents());

 ?>
