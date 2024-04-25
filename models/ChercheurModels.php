<?php

//Fonction pour récupérer les chercheurs
function getChercheurs(){
    
    //Endpoint de l'API
    $url = "http://localhost/projet-3-php/api/chercheurs";

    //Options de la requête
    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $context = stream_context_create($option);
    $result = file_get_contents($url, false, $context);

    //Retourner le résultat de la requête
    return json_decode($result);
}

?>