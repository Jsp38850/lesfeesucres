
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {

  // (1) Code PHP pour traiter l'envoi de l'email

  // Récupération des variables et sécurisation des données
  $prenom  = htmlentities($_POST['prenom']);
  $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $mail   = htmlentities($_POST['mail']);
	$option = isset($_POST['choix']) ? $_POST['choix'] : false;
  $message = htmlentities($_POST['message']);

  // Variables concernant l'email

  $destinataire = 'balassem.mb@gmail.com'; // Adresse email du webmaster (à personnaliser)
  $sujet = 'Contacte'; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Prenom</strong>: '.$prenom. '</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
  $contenu .= '<p><strong>Type de demande</strong>: '.$option.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
  $headers .= 'From:Contacte@gmail.com' . "\r\n";

  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo' <script language="javascript">';
  echo 'if(confirm("message envoye avec succes")){ document.location.href="https://lesgourmandisesdetif.fr/";}
    else {
      { document.location.href="https://lesgourmandisesdetif.fr/";}

    }';
    echo '</script>';
// Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
}
?>
