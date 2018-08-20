<?php
	// Charge le cachet et la photo afin d'y appliquer le tatouage numérique
	$watermark = imagecreatefrompng('image/tianarason.png');
	$im = imagecreatefromjpeg($_GET['image']);

	// Définit les marges pour le cachet et récupère la hauteur et la largeur de celui-ci
	$marge_right = 10;
	$marge_bottom = 10;
	$sx = imagesx($watermark);
	$sy = imagesy($watermark);

	// Copie le cachet sur la photo en utilisant les marges et la largeur de la
	// photo originale  afin de calculer la position du cachet
	imagecopy($im, $watermark, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($watermark), imagesy($watermark));

	// Affichage et libération de la mémoire
	header('Content-type: image/png');
	imagepng($im);
	imagedestroy($im);
?>
