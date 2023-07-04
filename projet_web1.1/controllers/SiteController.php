<?php

namespace Controller;

use Base\Controller;
use Model\Plats;
use Model\Infolettres;

class SiteController extends Controller
{

    /**
     * Affiche la page d'accueil du site web
     *
     * @return void
     */
    public function index()
    {
        include("views/index.view.php");
    }


    /**
     * affiche la vue du menu ,recupere et affiche les informations de la table Plats dans la page menu
     * et recupere les image pour les afficher dynamiquement et aleatoirement.
     *
     * @return void
     */
    public function menu()
    {
        $modele = new Plats;

        // recupere seulement les images de chaque catégorie
        $image_entree = $modele->getImagesEntrees();
        $image_plat = $modele->getImagesPlats();
        $image_dessert = $modele->getImagesDesserts();

        // récupéré tout les information des plats par categorie
        $entrees = $modele->recupererEntrees();
        $plats_principaux = $modele->recupererPlats();
        $desserts = $modele->recupererDesserts();

        include("views/menu.view.php");
    }



    /**
     * affiche la vue de la page contactez-nous
     *
     * @return void
     */
    public function contact()
    {
        include("views/contact.view.php");
    }

    /**
     * affiche la page a-props
     *
     * @return void
     */
    public function aPropos()
    {

        include("views/a-propos.view.php");
    }


    /**
     * envoie l'information des client qui s'abonne a l'infolettre jusqu'à la bdd 
     *
     * @return void
     */
    public function EnvoyerInfolettre()
    {

        // Validation des paramètres
        if (
            empty($_POST["nom"]) ||
            empty($_POST["email"])
        ) {
            header("location: contact?erreur=1");
            exit();
        }

        // Ajouter information a la bdd dans table infolettre
        $modele = new Infolettres;
        $succes = $modele->ajouter(
            $_POST["nom"],
            $_POST["email"]
        );

        // Redirection si échec
        if (!$succes) {
            header("location: contact?erreur2=1");
            exit();
        }

        // Redirection si succès
        header("location: contact?succes_ajout=1");
        exit();
    }


    /**
     *     // envois l'information a la bdd dans la table infolettre

     *
     * @return void
     */
    public function EnvoyerInfolettrePopup()
    {

        // Validation des paramètres
        if (
            empty($_POST["nom"]) ||
            empty($_POST["courriel"])
        ) {
            header("location: contact?erreur4=1");
            exit();
        }

        // Ajouter information a la bdd dans table infolettre
        $modele = new Infolettres;
        $succes = $modele->ajouterBdd(
            $_POST["nom"],
            $_POST["courriel"]
        );

        // Redirection si échec
        if (!$succes) {
            header("location: contact?erreur3=1");
            exit();
        }

        // Redirection si succès
        header("location: contact?succes_ajout2=1");
        exit();
    }
}
