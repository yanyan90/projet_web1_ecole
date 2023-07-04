<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/connexion.css">
</head>

<body>

    <?php if (isset($_GET["infos_requises"])) : ?>
        <p class="btn btn-danger">
            Toutes les informations sont requises !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["infos_invalides"])) : ?>
        <p class="btn btn-danger">
            Informations invalides !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["succes_deconnexion"])) : ?>
        <p class="btn btn-success">
            vous êtes déconnecté !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["creation_reussi"])) : ?>
        <p class="btn btn-success">
            Votre compte à été créé avec succès !
        </p>
    <?php endif; ?>
    <div class="conteneur">
        <img src="public/img/logo.png" alt="logo">
        <h1>Connexion PUB G4 employer </h1>
        <div class="formulaire-connexion">
            <form action="connecter" method="POST">
                <div class="email"><input class="email" type="email" name="courriel" placeholder="Courriel" autofocus require></div>
                <div class="password"><input class="password" type="password" name="mdp" placeholder="Mot de passe" require></div>
                <div class="submit"><input class="submit" type="submit" value="connexion"></div>
            </form>
        </div>
        <a href="index" class="btn btn-primary">Retour à la page d'accueil</a>
    </div>

    <script src="public/js/connexion.js"></script>

</body>

</html>