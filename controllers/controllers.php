<?php

//Affichage de la page d'accueil
function home() {
    require "views/homeView.php";
}

//Affichage de la page d'erreur 404
function notFound() {
    require "views/notFoundView.php";
}

//Affichage de la liste des médicaments
function afficherListeMedicaments(){

    //Récupérer les médicaments depuis le modèle
    $medicaments = getMedics();

    //Afficher la vue en lui envoyant les médicaments
    require_once "views/listMedicView.php";
}

//Affichage des détails d'un médicament
function afficherDetailsMedicament(){

    //Récupérer l'id du médicament en parametre GET
    $id = $_GET["id"];

    //Récupérer le médicament depuis le modèle
    $medicament = getMedic($id);

    //Si le médicament n'existe pas, afficher une erreur 404
    if($medicament == null) {
        notFound();
    //Sinon, afficher la vue en lui envoyant les détails du médicament
    } else {
        require_once "views/detailsView.php";
    }

}

//Affichage de la liste des activités
function afficherListeActivites(){

    //Récupérer les activités depuis le modèle
    $activites = getActivs();

    //Afficher la vue en lui envoyant les activités
    require_once "views/listActivView.php";
}

//Affichage de la page d'inscription à une activité
function afficherInscription(){

    //Récupérer l'id de l'activité en parametre GET
    $id = $_GET["activite"];

    //Récupérer l'activité depuis le modèle
    $activite = getActiv($id);

    //Si l'activité n'existe pas, afficher une erreur 404
    if($activite == null){
        notFound();
    //Sinon, afficher la vue Inscription en lui envoyant les détails de l'activité
    } else {
        require_once "views/inscriptionView.php";
    }

}

//Affichage de la page des mentions légales
function afficherMentions(){
    require_once "views/mentionView.php";
}

//Inscrire l'utilisateur a une activité
function inscriptionActivite(){

    //Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $idActivite = $_POST['idActivite'];

    //Insérer les données grâce au modèle
    $resultat = inscrireActivite($nom, $prenom, $mail, $idActivite);

    //Rediriger vers la liste des activités avec un message de succès ou d'erreur
    if (json_decode($resultat)->status_message === "user_successfully_inscribed"){
        header('Location: activites?status=success');
    } else {
        header('Location: activites?status=error');
    }
}

function afficherChercheurs(){

    //Récupérer les chercheurs depuis le modèle
    $chercheurs = getChercheurs();

    require_once "views/chercheursView.php";
}

?>