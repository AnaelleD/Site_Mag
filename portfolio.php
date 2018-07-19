<?php
include 'bdd/bdd.php';

$creation = $_GET['creation'];
$escaped = pg_escape_string($creation);
$bdd = connexionbd();
$requete = "select nom,legende, categorie, photo from image where categorie = '{$escaped}'";
$resultat = requete($bdd, $requete);

$img = '';
foreach($resultat as $ligne) {
	$img = $img.'<div class = "col-lg-2 col-sm-4 col-xs-6"><a title="'.$ligne['legende'].'" href="#" "><img class="thumbnail img-responsive center-block"" src ="'.$ligne['photo'].'" ></a></div>';
}

####### Mise en forme HTML final
$vue = file_get_contents("portfolio.html");
$vue = str_replace("{lesImages}", $img, $vue);
$vue = str_replace("{leTitre}", '<h3 style="color:black;text-transform: uppercase">PORTFOLIO '.$creation.'</h3>', $vue);
echo $vue ;
?>
