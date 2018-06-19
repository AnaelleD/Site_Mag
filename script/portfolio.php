<?php
include '../bdd/bdd.php';
$bdd = connexionbd();
?>

<?php
$requete = "SELECT image FROM Image WHERE categorie = 'creativite'";
$resultat = requete($bdd, $requete);
  echo '<table>';
  foreach($resultat as $ligne) {
    echo '<tr>';
    echo ('<td> <img src ="'.$ligne['image'].'"width=150" "height=150"/></td>');
    echo '<tr>';
  }
  echo'</table>';
?>
