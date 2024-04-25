<?php

//Importation des modeles et des controleurs
require_once "models/ActivModels.php";
require_once "models/MedicModels.php";
require_once "models/ChercheurModels.php";
require_once "controllers/controllers.php";

//Détecter une tentative d'inscription à une activité
if(isset($_POST['action'])){
    if($_POST['action'] === "inscription"){
        inscriptionActivite();
    }

    exit();
}

//Récupérer la page que l'utilisateur soiuhaite afficher
if(isset($_GET["action"])) {

    $action = $_GET["action"];
    
    switch($action) {
        case "home":
            home();
            break;
        default:
            notFound();
            break;
        
        case "medicaments":
            afficherListeMedicaments();
            break;

        case "details":
            afficherDetailsMedicament();
            break;

        case "activites":
            afficherListeActivites();
            break;
        
        case "inscription":
            afficherInscription();
            break;

        case "legal":
            afficherMentions();
            break;
        
        case "chercheurs":
            afficherChercheurs();
            break;
    }

//Si rien n'a été spécifié, afficher la page d'accueil
} else {
    home();
}


?>