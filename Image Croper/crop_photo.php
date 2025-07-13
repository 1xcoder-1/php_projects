<?php

$targ_w = $_POST['targ_w'];
$targ_h = $_POST['targ_h'];
$jpeg_quality = 90;
$src = $_POST['photo_url'];
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
imagejpeg($dst_r,$src,$jpeg_quality);
echo '<img src="'.$src.'?'.time().'">';
exit;
?>