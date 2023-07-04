<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'un repas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/ajout-plats.css">
</head>

<body>

    <?php if (isset($_GET["infos_requises"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue , information manquante!
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["echec_ajout"])) : ?>
        <p class="btn btn-danger">
            Échec d'ajout de plats!
        </p>
    <?php endif; ?>

    <a href="liste-menu " class="btn btn-primary">Retour au menu</a>
    <h1>ajouter un plat au menu</h1>
    <div class="conteneur">
        <form action="plats-enregistrer" method="POST" enctype="multipart/form-data">
            <div class="nom">
                <label>
                    <p>Nom du plat(*)</p>
                    <input type="text" name="nom" placeholder="Nom">
                </label>
            </div>
            <div class="description">
                <label>
                    <p>Description(*)</p>
                    <textarea class="form-control bg-light" name="description" rows="4" cols="37" placeholder="Description"></textarea>
                </label>
            </div>
            <div class="prix">
                <label>
                    <p>Ajouter un prix(*)</p>
                    <input type="number" step="0.01" name="prix" placeholder="$">
                </label>
            </div>
            <div class="categorie">
                <label>
                    <p>Choisissez une categorie(*)</p>
                    <select name="categorie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php foreach ($options as $option) : ?>
                            <option value="<?= $option->id ?>"><?= $option->nom ?></option>
                        <?php endforeach ?>
                    </select>
                </label>
            </div>
            <div class="image">
                <label>
                    <p>Ajouter une photo (Facultatif)</p>
                    <input class="form-control " type="file" name="image">
                </label>
            </div>
            <div class="submit">
                <input type="submit" value="Créer un plats">
            </div>
        </form>
    </div>
    <script src="public/js/ajout-plats.js"></script>
</body>

</html>