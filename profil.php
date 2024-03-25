<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/liste.css">
    <link rel="stylesheet" href="assets/profil.css">

</head>


<body>

    <?php

    include './Views/navBarreCo.php';

    ?>

    <main>
        <div id="profil">
            <h1>Profil</h1>
            <ul class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Informations utilisateur
                </button>
                <li class="list-group-item">Prénom : </li>
                <li class="list-group-item">Nom : </li>
                <li class="list-group-item">Email : </li>
                <li class="list-group-item">Mot de passe : </li>
            </ul>
        </div>

        <div id="buttonProfil">
            <button class="btn btn-secondary">Supprimer mon compte</button>
            <a href="../modifierInfo.php" type="button" class="btn btn-secondary">Modifier</a>
        </div>
    </main>

</body>