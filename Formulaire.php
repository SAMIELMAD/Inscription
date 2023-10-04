<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $inscription = $_POST["inscription"];
    $filiere = $_POST["filiere"];
    $livre = $_POST["livre"];
    $pourquoi = $_POST["pourquoi"];
    $accepter = isset($_POST["accepter"]) ? "Oui" : "Non";
    $recevoir = isset($_POST["recevoir"]) ? "Oui" : "Non";
    $signature = $_POST["signature"];

    $destinataire = "samielmadssia@gmail.com";
    $sujet = "Formulaire d'Inscription";
    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Adresse E-mail: $email\n";
    $message .= "Numéro d’inscription: $inscription\n";
    $message .= "Filière: $filiere\n";
    $message .= "Titre de livre choisi pour la compétition: $livre\n";
    $message .= "Pourquoi avez-vous choisi ce livre ? : $pourquoi\n";
    $message .= "Acceptez-vous les règles de la compétition ? : $accepter\n";
    $message .= "Acceptez-vous de recevoir des communications par e-mail ? : $recevoir\n";
    $message .= "Signature de l’étudiant: $signature";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $message);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
}
?>
