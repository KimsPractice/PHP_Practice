<?php

class TestFileObject {
  private $filename;

  //인자로 받아온 파일의 유무
  function __construct($fname){
      $this->filename = $fname;
      if (!file_exists($this->filename)) {
        die($this->filename.'파일이 존재하지 않습니다');
      }
  }

  function isFile(){
    return is_file($this->filename);
  }
}
$myfile = new TestFileObject('test.txt');
// $file = new TestFileObject();
// $file->filename = 'data.txt';
var_dump($myfile->isFile());


/*
TestFileObject : class
$myfile : Instance
isFile : method, behavior
$this->filename : Instance variable, field, property, status
*/

 ?>
