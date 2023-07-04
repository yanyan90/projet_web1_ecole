<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/accueil.css">
</head>

<body>

    <header>
        <nav>
            <a href="index"><img class="nav-img" src="public/img/logo.png" alt="logo" width="250"></a>
            <a href="index" class="lien1">Accueil</a>
            <a href="menu" class="lien1">Menu</a>
            <a href="a-propos" class="lien2">À propos</a>
            <a href="contact" class="lien2">Contactez-nous</a>
        </nav>

        <div class="conteneur">
            <h1>vivez l'experience ultime</h1>

            <a href="menu" class="btn">
                <p>Menu</p>
            </a>

            <div class="image-overlay"></div>
            <div class="img"></div>
        </div>
    </header>

    <main>
        <section class="menu">

            <div class="entrees">

                <h2>Nos entrées</h2>
                <div class="entree" id="divClicable" onclick="window.location.href='menu#entrees';" style="cursor: pointer;">
                    <a href="menu#entrees" class="btn-commander">
                        Commander
                    </a>
                </div>
                <div class="overlay-entrees"></div>
                <div class="img-entrees"></div>
            </div>

            <div class="plats">

                <h2>Plats principaux</h2>
                <div class="plat" id="divClicable" onclick="window.location.href='menu#plats';" style="cursor: pointer;">
                    <a href="menu#plats" class="btn-commander">
                        Commander
                    </a>
                </div>
                <div class="overlay-plats"></div>
                <div class="img-plats"></div>
            </div>


            <div class="desserts">

                <h2>Desserts</h2>
                <div class="dessert" id="divClicable" onclick="window.location.href='menu#desserts';" style="cursor: pointer;">
                    <a href="menu#desserts" class="btn-commander">
                        Commander
                    </a>
                </div>
                <div class="overlay-desserts"></div>
                <div class="img-desserts"></div>
            </div>
        </section>

        <section class="commentaires">
            <div>
                <h2>Expériences de nos clients</h2>
            </div>

            <div class="commentaire"></div>

            <div class="note"></div>

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

    <script src="public/js/main.js"></script>
</body>

</html>