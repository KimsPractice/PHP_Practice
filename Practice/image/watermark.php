<?php
$mark = imagecreatefrompng('text.png');
$bg = imagecreatefrompng('bgimg.png');

$margin_right = 10;
$margin_bottom = 10;
$sx = imagesx($mark);
$sy = imagesy($mark);

imagecopy($bg, $mark, imagesx($bg) - $sx - $margin_right, imagesy($bg) - $sy - $margin_bottom, 0,0, imagesx($mark),imagesy($mark));

header('Content-type: image/png');
imagepng($bg);
imagedestroy($bg);

 ?>
