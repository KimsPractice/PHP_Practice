<h1>Function</h1>
<?php
var_dump(is_file('test.txt'));
var_dump(is_dir('test.txt'));
var_dump(file_get_contents('test.txt'));
file_put_contents('test.txt',rand(1, 100))
?>

<h1>Object</h1>
<?php
$file = new SplFileObject('test.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite(rand(1,100));

// SplFileObject : Class
// $file : instanse
// isFile, isDir : Method

 ?>
