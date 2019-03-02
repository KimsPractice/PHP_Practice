<h1>Function</h1>
<?php
$adata = array('a','b','c');
array_push($adata, 'd');
foreach ($adata as $value) {
  echo $value."<br>";
}
var_dump(count($adata));
?>

<h1>Object</h1>
<?php
$odata = new ArrayObject(array('a','b','c'));
$odata->append('d');
foreach ($odata as $ovalue) {
  echo $ovalue.'<br>';
}
var_dump($odata->count());
 ?>
