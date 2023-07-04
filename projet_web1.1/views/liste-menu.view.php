<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste du menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/liste-menu.css">
</head>

<body>

    <div class="conteneur-message">
        <?php if (isset($_GET["succes_connexion"])) : ?>
            <p class="btn btn-success message">
                Vous êtes connecté !
            </p>
        <?php endif; ?>

        <?php if (isset($_GET["contenue_supprimer"])) : ?>
            <p class="btn btn-success message">
                Plat supprimé !
            </p>
        <?php endif; ?>

        <?php if (isset($_GET["succes-modification"])) : ?>
            <p class="btn btn-success message">
                Plat modifier avec succès!
            </p>
        <?php endif; ?>

        <?php if (isset($_GET["succes_ajout"])) : ?>
            <p class="btn btn-success message">
                Plat ajouter !
            </p>
        <?php endif; ?>

        <?php if (isset($_GET["erreur"])) : ?>
            <p class="btn btn-danger message">
                Une erreur est survenue, information manquante!
            </p>
        <?php endif; ?>

        <?php if (isset($_GET["echec_suppression"])) : ?>
            <p class="btn btn-danger message">
                Échec de suppression!
            </p>
        <?php endif; ?>
    </div>

    <div id="scroll-target"></div>

    <nav>
        <a href="deconnection" class="btn btn-danger">Déconnexion</a>
        <a href="ajout-plats" class="btn btn-primary">Ajouter un repas</a>

        <?php if ($_SESSION["utilisateur_id"] == 1) : ?>
            <a href="compte-creer" class="btn btn-warning">Créé un compte employer</a>
            <a href="liste-employer" class="btn btn-success">liste des employés</a>
        <?php endif; ?>
    </nav>

    <h1>Menu</h1>

    <div>
        <a class="scroll-plats" href="#scroll-plat">Plats-principaux</a>
        <a class="scroll-desserts" href="#scroll-dessert">Desserts</a>
        <h2 class="entree">Nos entrées</h2>
        <?php foreach ($entrees as $un_entree) : ?>
            <div class="wrapper-entree">
                <div class="contenue">
                    <p class="nom-prix"><?= $un_entree->nom ?>..................................................<?= $un_entree->prix ?>$</p>
                    <p class="description"><?= $un_entree->description ?></p>
                    <a class="btn btn-danger" href="suppression?id=<?= $un_entree->id ?>">Suprimer</a>
                    <a class="btn btn-light" href="formulaire-modification?id=<?= $un_entree->id ?>">Modifier</a>
                </div>
                <div>
                    <?php if ($un_entree->image != null) : ?>
                        <div class="img">
                            <img class="img" src="<?= $un_entree->image ?>" alt="Image" width="250">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        <?php endforeach ?>
    </div>

    <a class="lien-fixe" href="#scroll-target"><span class="material-symbols-outlined">
            arrow_upward_alt
        </span> </a>

    <div>
        <h2>Plats principaux</h2>
        <div id="scroll-plat"></div>
        <?php foreach ($plats_principaux as $un_plat) : ?>
            <div class="wrapper-plats">
                <div class="contenue">
                    <p class="nom-prix"><?= $un_plat->nom ?>..................................................<?= $un_plat->prix ?>$</p>
                    <p class="description"><?= $un_plat->description ?></p>
                    <a class="btn btn-danger" href="suppression?id=<?= $un_plat->id ?>">Suprimer</a>
                    <a class="btn btn-light" href="formulaire-modification?id=<?= $un_plat->id ?>">Modifier</a>
                </div>
                <div>
                    <?php if ($un_plat->image != null) : ?>
                        <div class="img">
                            <img class="img" src="<?= $un_plat->image ?>" alt="Image" width="250">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div>
        <h2>Desserts</h2>
        <div id="scroll-dessert"></div>
        <?php foreach ($desserts as $un_dessert) : ?>
            <div class="wrapper-dessert">
                <div class="contenue">
                    <p class="nom-prix"><?= $un_dessert->nom ?>..................................................<?= $un_dessert->prix ?>$</p>
                    <p class="description"><?= $un_dessert->description ?></p>
                    <a class="btn btn-danger" href="suppression?id=<?= $un_dessert->id ?>">Suprimer</a>
                    <a class="btn btn-light" href="formulaire-modification?id=<?= $un_dessert->id ?>">Modifier</a>
                </div>
                <div>
                    <?php if ($un_dessert->image != null) : ?>
                        <div class="img">
                            <img class="img" src="<?= $un_dessert->image ?>" alt="Image" width="250">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <script src="public/js/liste-menu.js"></script>
</body>

</html>