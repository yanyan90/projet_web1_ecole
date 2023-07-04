<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/formulaire-modification-employer.css">
</head>

<body>
    <?php if (isset($_GET["erreur-survenue"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue , information manquante!
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["info-manquante"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue , information manquante!
        </p>
    <?php endif; ?>
    <?php if (isset($_GET["modification-echoue"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue !
        </p>
    <?php endif; ?>

    <a class="btn btn-primary" href="liste-employer">Retour liste des employés</a>
    <a class="btn btn-dark" href="liste-menu">Retour au Menu</a>

    <div class="conteneur">
        <h1>Modifier un employer</h1>
        <form action="modification-employer" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" value="<?= $employe->id ?>" name="id">
                <label for="nom">Modifier le nom</label><br>
                <input class="nom" type="text" id="nom" name="nom" value="<?= $employe->nom ?>">
            </div>
            <div>
                <label for="prenom">Modifier le prenom</label><br>
                <input class="prenom" type="text" id="prenom" name="prenom" value="<?= $employe->prenom ?>">
            </div>
            <div>
                <label for="courriel">Modifier le courriel</label><br>
                <input class="courriel" type="email" id="courriel" name="courriel" value="<?= $employe->courriel ?>">
            </div>
            <div>
                <label for="mdp">Modifier le mot de passe</label><br>
                <input class="mdp" type="password" id="mdp" name="mdp" value="">
            </div>
            <div>
                <input class="submit" type="submit" value="Modifier">
            </div>
        </form>
    </div>
    <script src="public/js/formulaire-modification-employer.js"></script>
</body>

</html>