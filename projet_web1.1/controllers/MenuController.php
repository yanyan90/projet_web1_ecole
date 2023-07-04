<?php

namespace Controller;

use Base\Controller;

use Model\Plats;
use Util\Upload;

class MenuController extends Controller
{

    /**
     * Affiche route index et recupere info de table plats pour afficher 
     * tous les entrees , plats principaux , desserts.
     *
     * @return void
     */
    public function index()
    {
        // Protection de la route /publications
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // Récupération les entrees , plat principaux et dessert
        $modele = new Plats;

        $entrees = $modele->recupererEntree();
        $plats_principaux = $modele->recupererPlat();
        $desserts = $modele->recupererDessert();

        include("views/liste-menu.view.php");
    }


    /**
     * suppression d'un repas dans le menu
     *
     * @return void
     */
    public function suppression()
    {

        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation
        if (empty($_GET["id"])) {
            header("location:liste-menu?erreur=1");
            exit();
        }

        // Appeler le modèle pour supprimer un le contenue
        $modele = new Plats;
        $supprimerContenue = $modele->supprimerContenue($_GET["id"]);

        // Rediriger l'utilisateur selon le résultat de la suppression
        if ($supprimerContenue == true) {
            header("location: liste-menu?contenue_supprimer=1");
            exit();
        } else {
            header("location: liste-menu?echec_suppression=1");
            exit();
        }
    }


    /**
     * Affiche le formulaire de creation d'un plats
     *
     * @return void
     */
    public function formulaireAjout()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // recuperé info categorie
        $modele = new Plats;
        $options = $modele->recupereCategorie();

        include("views/ajout-plats.view.php");
    }


    /**
     * Traite les informations d'une nouvelle activité
     *
     * @return void
     */
    public function enregistrer()
    {
        // Protection de la route /activité
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // Validation des paramètres
        if (
            empty($_POST["nom"]) ||
            empty($_POST["description"]) ||
            empty($_POST["prix"]) ||
            empty($_POST["categorie"])

        ) {
            header("location: ajout-plats?infos_requises=1");
            exit();
        }

        // Traitement de l'image s'il y en a une
        $image = null;
        $upload = new Upload("image", ["jpeg", "jpg", "png", "webp", "gif"]);
        if ($upload->estValide()) {
            $image = $upload->placerDans("uploads");
        }

        // Ajouter la publication
        $modele = new Plats;
        $succes = $modele->ajouter(
            $_POST["nom"],
            $_POST["description"],
            $_POST["prix"],
            $_POST["categorie"],
            $image
        );

        // Redirection si succès
        if ($succes == true) {
            header("location: liste-menu?succes_ajout=1");
            exit();
        }

        // Redirection si échec
        header("location: ajout-plats?echec_ajout=1");
        exit();
    }



    /**
     * affiche le formulaire de modification
     *
     * @return void
     */
    public function formulaireModification()
    {

        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation
        if (empty($_GET["id"])) {
            header("location:formulaire-modification?erreur-survenue=1");
            exit();
        }

        // recuperé info avec id
        $modele = new Plats;
        $info = $modele->modificationFormulaire($_GET["id"]);
        $options = $modele->recupereCategorie();

        // view
        include("views/formulaire-modification.view.php");
    }


    // traitement de la modification d'un repas
    public function modificationPlats()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation du formulaire
        if (empty($_POST["id"]) || empty($_POST["nom"]) || empty($_POST["description"])  || empty($_POST["prix"]) || empty($_POST["categorie"])) {
            header("location:formulaire-modification?info-manquante=1&id=" . $_POST["id"]);
            exit();
        }

        // Traitement de l'image s'il y en a une
        $image = null;
        $upload = new Upload("image", ["jpeg", "jpg", "png", "webp", "gif"]);
        if ($upload->estValide()) {
            $image = $upload->placerDans("uploads");
        }

        // variable
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $description = $_POST["description"];
        $prix = $_POST["prix"];
        $categorie = $_POST["categorie"];
        $image;

        // requete pour envoyer nouvelle info a la BDD plats
        $modele = new Plats;
        $succes = $modele->envoisFormulaire($id, $nom, $description, $prix, $categorie, $image);

        // redirection
        if ($succes == true) {
            header("location:liste-menu?succes-modification=1");
            exit();
        } else {
            header("location:formulaire-modification?modification-echoue=1&id=" . $_POST["id"]);
            exit();
        }
    }
}
