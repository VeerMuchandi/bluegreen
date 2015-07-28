Welcome!!
<?php
 $im = ImageCreate(200,200);
 $white = ImageColorAllocate($im,0xFF,0xFF,0xFF);
 $black = ImageColorAllocate($im,0x00,0x00,0x00);
 ImageFilledRectangle($im,50,50,150,150,$black);
 header('Content-Type: image/jpeg');
 ImageJPEG($im);
?>
