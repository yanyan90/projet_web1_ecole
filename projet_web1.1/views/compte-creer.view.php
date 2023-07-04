<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de creation de compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/compte-creer.css">
</head>

<body>

    <?php if (isset($_GET["infos_absentes"])) : ?>
        <p class="btn btn-danger">
            Information manquante !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["echec_creation_compte"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue !
        </p>
    <?php endif; ?>

    <a href="liste-menu" class="btn btn-primary">Retour au menu</a>
    <h1>Créez un accès pour vos employés</h1>
    <div class="conteneur">
        <div class="formulaire">
            <form action="compte-enregistrer" method="POST">
                <div class="prenom"><input type="text" name="prenom" placeholder="Prénom" autofocus required></div>
                <div class="nom"><input type="text" name="nom" placeholder="Nom" required></div>
                <div class="courriel"><input type="email" name="courriel" placeholder="Courriel" required></div>
                <div class="password"><input type="password" name="mdp" placeholder="Mot de passe" required></div>
                <div class="submit"><input class="submit" type="submit" value="Créer!"></div>
            </form>
        </div>
    </div>
    <script src="public/js/compte-creer.js"></script>
</body>

</html>