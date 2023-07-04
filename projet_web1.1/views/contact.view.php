<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/contact.css">
</head>

<body>

    <?php if (isset($_GET["erreur2"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue. Veuillez réessayer un peu plus tard !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["erreur"])) : ?>
        <p class="btn btn-danger">
            Un problème est survenu, information manquante !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["succes_ajout2"])) : ?>
        <p class="btn btn-success success">
            Merci pour votre inscription !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["erreur3"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue. Veuillez réessayer un peu plus tard !
        </p>
    <?php endif; ?>

    <?php if (isset($_GET["erreur4"])) : ?>
        <p class="btn btn-danger">
            Une erreur est survenue.Information manquante !
        </p>
    <?php endif; ?>


    <header>
        <nav>
            <a href="index"><img class="nav-img" src="public/img/logo.png" alt="logo" width="250"></a>
            <a href="index" class="lien1">Accueil</a>
            <a href="menu" class="lien1">Menu</a>
            <a href="a-propos" class="lien2">À propos</a>
            <a href="contact" class="lien2">Contactez-nous</a>
        </nav>
    </header>

    <main>
        <div class="conteneur">

            <div class="heures">
                <h2>les heures d'ouverture</h2>
                <p>PUB G4 </p>
                <p>Heure de la cuisine <br>
                    Dimanche au jeudi de 11h30 à 21h <br>
                    Vendredi et samedi de 11h30 à 22h </p>
                <p>La salle ferme plus tard dépendant de l'achalandage</p>
            </div>

            <div class="coordonnees">
                <div>
                    <h2>Les coordonnées</h2>
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
                <div class="overlay-coordonnees"></div>
                <div class="img-coordonnees"></div>
            </div>
            <div class="infolettre">

                <div class="reseau-sociaux">
                    <a href="https://www.facebook.com"><img src="public/img/f_logo_RGB-White_58.png" alt="icons" width="50"></a>
                    <a href="https://www.instagram.com"><img src="public/img/Instagram_Glyph_White.png" alt="icons" width="50"></a>
                    <a href="https://www.twitter.com"><img src="public/img/2021 Twitter logo - white.png" alt="icons" width="50"></a>
                </div>

                <div class="conteneur-form">
                    <h2>La comunauté</h2>
                    <p>Abonnez-vous à notre infolettre!</p>
                    <form action="envoyer-infolettre" method="POST">
                        <div class="nom"><input type="text" name="nom" placeholder="Nom" required></div>
                        <div class="email"><input type="email" name="email" placeholder="Courriel" required></div>
                        <div class="soumettre"><input type="submit" value="Soumettre"></div>
                    </form>
                    <?php if (isset($_GET["succes_ajout"])) : ?>
                        <p class="btn btn-success">
                            Merci pour votre inscription !
                        </p>
                    <?php endif; ?>
                </div>
                <div class="overlay-infolettre"></div>
                <div class="img-infolettre"></div>

            </div>
        </div>

        <div id="popupForm" style="display: none;">
            <a class="fermerFormulaire" href="#">x</a>

            <h2>Abonnez-vous à notre</h2>
            <h3>Infolettre</h3>

            <form action="envoyer-infolettre-popup" method="POST" id="myForm">
                <input type="text" id="name" name="nom" required placeholder="Nom">
                <input type="email" id="email" name="courriel" required placeholder="Courriel">
                <input class="submit" type="submit" value="Soumettre">
            </form>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7467856551393!2d-74.00559052395367!3d45.776264671080796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20St%20Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%205A2!5e0!3m2!1sfr!2sca!4v1685476093893!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

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
    <script src="public/js/contact.js"></script>
</body>

</html>