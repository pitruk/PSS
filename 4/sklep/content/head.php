<?php
require 'mojang-api.class.php';

$uuid = MojangAPI::getUuid($_GET['nick']);
if($uuid != null) {
	$im = imagecreatefrompng("https://crafatar.com/avatars/$uuid?size=35");
} else {
	$im = imagecreatefrompng("../images/steve.png");
}

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);
?>
