<?
$imgl = "1.jpg";
$img2 = "2.jpg";

$dest = imagecreatefromjpeg($imgl);
$src = imagecreatefromjpeg($img2);
imagecolortransparent($src, imagecolorat($src, 0, 0));

$src_x = imagesx($src);
$src_y = imagesy($src);
imagecopymerge($dest, $src, 75, 50, 75, 0, $src_x, $src_y, 100);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($dest);

imagedestroy($dest);
imagedestroy($src);
?>
