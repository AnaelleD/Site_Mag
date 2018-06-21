<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email

  $nombreErreur = 0; // Variable qui compte le nombre d'erreur

  // Définit toutes les erreurs possibles
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Votre email ne semble pas valide.</p>';
      }

  if ($_POST['captcha']!=3) {
      $nombreErreur++;
      $erreur2 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
    }

  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    // Variables concernant l'email
    $destinataire = 'anaelle.dambreville@gmail.com'; // Adresse email du webmaster
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour Magali, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

    echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    echo '</div>';
  }
}

header('Refresh: 2; URL=../index.html'); // fonction pour revenir à l'index.html au bout de 2 secondes
?>
