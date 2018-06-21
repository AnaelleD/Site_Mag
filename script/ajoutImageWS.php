<?php
include '../bdd/bdd.php';
$bdd = connexion();

if(isset($_FILES['image']['tmp_name'])) {
  $tmpNameImage = $_FILES['image']['tmp_name'];

  if(file_exists($tmpNameImage) || is_uploaded_file($tmpNameImage)) {
        $nom = $_FILES['image']['name'];

        move_uploaded_file($tmpNameImage, "../image/".$nom);
        $image = "image/" . $nom;
  }
  else {
    $image=null;
  }
else {
  $image=null;
}

$req = $bdd->prepare('INSERT INTO Image (nom, legende, categorie, photo) VALUES (:nom,:legende,:categorie,:image);');

if(!empty($_REQUEST['nomImage'] && $_REQUEST['legende'] && $_REQUEST['categorie'])) {
	$req -> execute(array(
    'nom' => $_REQUEST['nomImage'],
    'legende' => $_REQUEST['legende'],
    'categorie' => $_REQUEST['categorie'],
    'photo' => $image,
	));
}

header('Refresh: 0; URL=../adminBDD.php');

?>
