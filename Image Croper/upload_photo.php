<?php

$photo_src = $_FILES['photo']['tmp_name'];
if (is_file($photo_src)) {
	$photo_dest = 'images/photo_'.time().'.jpg';
	copy($photo_src, $photo_dest);
	echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
}
?>