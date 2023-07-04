<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/liste-employer.css">
</head>

<body>
    <?php if (isset($_GET["contenue_supprimer"])) : ?>
        <p class="btn btn-success">
            Le compte a été supprimé !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["erreur"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue , information manquante!
        </p>
    <?php endif; ?>


    <?php if (isset($_GET["echec_suppression"])) : ?>
        <p class="btn btn-danger">
            Échec de suppression!
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["succes-modification"])) : ?>
        <p class="btn btn-success">
            Modification réussi!
        </p>
    <?php endif; ?>

    <div class="image">
        <div class="overlay"></div>
        <div class="img"></div>
    </div>

    <a href="liste-menu" class="btn btn-primary">Retour au menu</a>
    <h1>Liste des employés</h1>
    <div class="conteneur1">
        <div class="conteneur">
            <?php foreach ($infos_employes as $un_employer) : ?>
                <div class="employer">
                    <p class="nom"><?= $un_employer->nom . " " . $un_employer->prenom ?></p>
                    <p><?= $un_employer->courriel ?></p>
                    <a class="btn btn-danger" href="suppression-employer?id=<?= $un_employer->id ?>">Supprimer le compte</a>
                    <a class="btn btn-light" href="formulaire-modification-employer?id=<?= $un_employer->id ?>">Modifier</a>
                </div>
                <div class="separation"></div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="public/js/liste-employer.js"></script>
</body>