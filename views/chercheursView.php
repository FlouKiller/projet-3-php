<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des chercheurs - Projet 3 PHP</title>
    <link rel="icon" href="views\downloads\Logo_Colore.png" type="image/png">
    <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
    <style>
        .card {
            flex: 0 0 calc(33.33% - 1rem);
            margin-right: 1rem;
            margin-bottom: 1rem;
        }
        .card-body {
            min-height: 200px;
        }
        @media (max-width: 992px) {
            .card {
                flex: 0 0 calc(50% - 1rem);
            }
        }
        @media (max-width: 576px) {
            .card {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>

<div class="container mt-5">

<h1 class="text-center">
    <img src="views/downloads/Logo_Colore.png" alt="Logo GSB Medical" style="width: 100px; height: auto; margin-right: 20px;">
    Liste des chercheurs
</h1>
<br> <br>

<div class="d-flex flex-wrap justify-content-between">
    <!-- Boucle qui parcourt toutes les activités récupérés dans le modèle et les affiche -->
    <?php foreach ($chercheurs as $chercheur): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $chercheur->nom . " " . $chercheur->prenom;  ?></h5>
                <p class="card-text">Spécialité : <?= $chercheur->specialite; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="mt-4">
    <a href="home" class="btn btn-primary">Retour à l'Accueil</a>
</div>

</div>
</body>
</html>
