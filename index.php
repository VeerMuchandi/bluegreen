Welcome!!
<?php
// Create a 55x30 image
$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);

// Draw a white rectangle
imagefilledrectangle($im, 4, 4, 200, 100, $blue);
//imagefilledrectangle($im, 4, 4, 200, 100, $green);

// Save the image
header('Content-Type: image/png');
imagePNG($im, './imagefilledrectangle.png');
imagedestroy($im);
?>
