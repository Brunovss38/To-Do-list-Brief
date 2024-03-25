<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/formulaire.css">
    <link rel="stylesheet" href="assets/formulaireCo.css">
    <link rel="stylesheet" href="assets/inscription.css">
    <link rel="stylesheet" href="assets/navBarreCo.css">

</head>

<body>

    <?php

    include './Views/navBarre.php';

    ?>
    <main>
        <div id="inscription">
            <h2> Inscription </h2>
            <div class="row g-3">

                <div class="col-md-6">
                    <label for="inputPrenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control firstName">
                </div>
                <div class="col-md-6">
                    <label for="inputNom" class="form-label">Nom</label>
                    <input type="text" class="form-control lastName " ">
                </div>
                <div class=" col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control email ">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control password">
                </div>


                <div>
                    <button onclick="handleRegister()" class="btn btn-primary flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'inscrires</button>
                </div>
            </div>

            <!-- <a href="../coTodolist.php" type="button" class="btn btn-primary">S'inscrire</a> -->
    </main>
    <script src="script.js">
    </script>
</body>

</html>