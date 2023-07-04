<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/menu.css">
</head>

<body>
    <header>
        <div id="scroll-target"></div>
        <nav>
            <a href="index"><img class="nav-img" src="public/img/logo.png" alt="logo" width="250"></a>
            <a href="index" class="lien1">Accueil</a>
            <a href="menu" class="lien1">Menu</a>
            <a href="a-propos" class="lien2">À propos</a>
            <a href="contact" class="lien2">Contactez-nous</a>
        </nav>
    </header>

    <main>
        <h1>menu</h1>
        <section id="entrees">
            <div class="ligne-haut"></div>
            <h2>Nos entrées</h2>

            <div class="ligne-bas"></div>

            <div class="contenue-entrees">
                <div class="entrees">
                    <?php foreach ($entrees as $entree) : ?>
                        <div>
                            <p class="nom-prix-entree"><?= $entree->nom ?>..................................................<?= $entree->prix ?>$</p>
                            <p class="description"><?= $entree->description ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="img-entree">
                    <img class="img" src="<?= $image_entree->image ?>" alt="Image" width="250" height="250">
                </div>
            </div>
        </section>

        <a class="lien-fixe" href="#scroll-target"><span class="material-symbols-outlined">
                arrow_upward_alt
            </span> </a>

        <section id="plats">
            <div class="ligne-haut"></div>
            <h2>Plats principaux</h2>
            <div class="ligne-bas"></div>
            <div class="contenue-plats">
                <div class="plats-principaux">
                    <?php foreach ($plats_principaux as $un_plat) : ?>
                        <div>
                            <p class="nom-prix">$<?= $un_plat->prix ?>..................................................<?= $un_plat->nom ?></p>
                            <p class="description"><?= $un_plat->description ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="img-plat">
                    <img class="img" src="<?= $image_plat->image ?>" alt="Image" width="250" height="250">
                </div>
            </div>
        </section>

        <section id="desserts">
            <div class="ligne-haut"></div>
            <h2>Desserts</h2>
            <div class="ligne-bas"></div>
            <div class="contenue-desserts">
                <div class="desserts">
                    <?php foreach ($desserts as $un_dessert) : ?>
                        <div>
                            <p class="nom-prix-dessert"><?= $un_dessert->nom ?>..................................................<?= $un_dessert->prix ?>$</p>
                            <p class="description"><?= $un_dessert->description ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="img-dessert">
                    <img class="img" src="<?= $image_dessert->image ?>" alt="Image" width="250" height="250">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <a href="index" class="logo"><img class="logo" src="public/img/logo.png" alt="logo" width="250"></a>
        <div class="coordonne">
            <div>
                <h3>Les coordonnées</h3>
            </div>
            <div>
                <p>
                    297, rue St-Georges,<br>
                    Saint-Jérôme (Québec) <br>
                    J7Z 5A2 </p>
            </div>

            <div>
                <p>
                    Pub G4 <br>
                    450 436-1531
                </p>
            </div>
        </div>

        <div class="nav">
            <a href="index">Accueil</a>
            <a href="menu">Menu</a>
            <a href="a-propos">À propos</a>
            <a href="contact">Contactez-nous</a>
        </div>

        <div class="reseau-sociaux">

            <a href="https://www.facebook.com"><img src="public/img/f_logo_RGB-White_58.png" alt="icons" width="50"></a>
            <a href="https://www.instagram.com"><img src="public/img/Instagram_Glyph_White.png" alt="icons" width="50"></a>
            <a href="https://www.twitter.com"><img src="public/img/2021 Twitter logo - white.png" alt="icons" width="50"></a>
        </div>

    </footer>

</body>

</html>