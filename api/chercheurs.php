<?php

//Connexion à la base de donnée
include("db_connect.php");

$request_method = $_SERVER["REQUEST_METHOD"];

//Déterminer l'action de l'utilisateur
switch($request_method){

    //En cas de requête GET, récupérer les chercheurs
    case "GET":
        //Si un ID est spécifié, récupérer l'activité correspondante
        if(isset($_GET["id"]) && $_GET["id"] !== ""){
            $id=intval($_GET["id"]);
            getChercheur($id);
        //Sinon, récupérer toutes les activités
        }else{
            getChercheurs();
        }
        break;

}

function getChercheur($id){

}

function getChercheurs(){

    global $conn;
    
    $query = "SELECT * FROM chercheurs ORDER BY nom";
    $response = array();

    $conn->query("SET NAMES 'utf8'");
    $result = $conn->query($query);
    while($row = $result->fetch()){
        $response[] = $row;
    }
    $result->closeCursor();
    header('Content-Type: application/json');
    echo json_encode($response);

}

?>