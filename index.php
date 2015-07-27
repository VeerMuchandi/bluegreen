Welcome!!
<?php
// Create a 55x30 image
$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);

// Draw a white rectangle
imagefilledrectangle($im, 4, 4, 50, 25, $white);

// Save the image
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
?>
