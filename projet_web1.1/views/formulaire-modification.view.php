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
    <link rel="stylesheet" href="public/css/formulaire-modification.css">
</head>

<body>

    <?php if (isset($_GET["info-manquante"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue, information manquante!
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["modification-echoue"])) : ?>
        <p class="btn btn-danger">
            La modification a échoué!
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["erreur-survenue"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue!
        </p>
    <?php endif; ?>

    <a class="btn btn-primary" href="liste-menu">Retour au menu</a>

    <h1>Modifier un plat</h1>
    <div class="conteneur">
        <form action="modification-plats" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" value="<?= $info->id ?>" name="id">
                <label for="nom">Modifier le plat</label><br>
                <input class="nom" type="text" id="nom" name="nom" value="<?= $info->nom ?>">
            </div>
            <div>
                <label for="description">Modifier la description du plat</label><br>
                <textarea class="form-control bg-light" id="description" name="description" cols="30" rows="6"><?= $info->description ?></textarea>
            </div>
            <div>
                <label for="prix">Modifier le prix</label><br>
                <input class="prix" id="prix" type="number" step="0.01" name="prix" value="<?= $info->prix ?>">
            </div>
            <div class="image">
                <label>
                    <p>Ajouter une photo (Facultatif)</p>
                    <input class="form-control " type="file" name="image">
                </label>
            </div>
            <div class="categorie">
                <label>
                    <p>Choisissez une categorie(*)</p>
                    <select class="form-select form-select-lg mb-3" name="categorie">
                        <?php foreach ($options as $option) : ?>
                            <option value="<?= $option->id ?>"><?= $option->nom ?></option>
                        <?php endforeach ?>
                    </select>
                </label>
            </div>
            <div>
                <input class="submit" type="submit" value="Modifier">
            </div>
        </form>
    </div>
    <script src="public/js/formulaire-modification.js"></script>
</body>

</html>