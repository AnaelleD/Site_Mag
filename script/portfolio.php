<?php
include '../bdd/bdd.php';
$bdd = connexionbd();
?>

<?php
/*echo '<table width = "100%" border = "1">';
	echo '<tr>';
    echo'<th>nom</th>';
		echo'<th>legende</th>';
    echo'<th>categorie</th>';
    echo'<th>photo</th>';
  echo '</tr>';

$requete = "select nom,legende, categorie, photo from image where categorie = 'creativite'";
$resultat = requete($bdd, $requete);

foreach($resultat as $ligne) {
	echo '<tr>';
  echo ('<td style=text-align:center;>'.$ligne['nom']. '</td>');
	echo ('<td style=text-align:center;>'.$ligne['legende']. '</td>');
  echo ('<td style=text-align:center;>'.$ligne['categorie']. '</td>');
  echo ('<td style=text-align:center;> <img src ="'.$ligne['photo'].'"width=150" "height=150"/></td>');
  echo '</tr>'	;
	}

echo ('</table>');
*/

$requete = "select nom,legende, categorie, photo from image where categorie = 'creativite'";
$resultat = requete($bdd, $requete);

foreach($resultat as $ligne) {
	echo '<article class = "portfolioCreativite" style = "display: inline-block; z-index: 10; opacity: 1">';
		echo '<span class = image>';
			  echo ('<img src ="'.$ligne['photo'].'"width=150" "height=150"/>&nbsp');
		echo '</span>';
	echo '</article>';
}
?>
