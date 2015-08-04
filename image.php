<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);

// Draw a white rectangle
//imagefilledrectangle($im, 0, 0, 199, 199, $blue);
imagefilledrectangle($im, 0, 0, 199, 199, $green);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
