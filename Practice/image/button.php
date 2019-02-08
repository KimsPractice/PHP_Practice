<?php
 header("Content-type: image/png");
 $string = $_GET['text'];
 $img = imagecreatefrompng("button.png");
 $color  = imagecolorallocate($img, 60, 87, 156);
 $px     = (imagesx($img) - 7.5 * strlen($string)) / 2;
 imagestring($img, 4, $px, 9, $string, $color);
 imagepng($img);
 imagedestroy($img);
 ?>
