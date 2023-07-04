<?php

namespace Controller;

use Base\Controller;
use Model\Admin;

class AdminController extends Controller
{
    /**
     * affiche la vue du formulaire de creation de compte d'employer
     *
     * @return void
     */
    public function creer()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation pour les droits d'acces au page admin de l'admin sinon redirige a la page liste-menu
        if ($_SESSION["utilisateur_id"] != 1) {
            header("location: liste-menu");
            exit();
        }

        include("views/compte-creer.view.php");
    }


    /**
     * Traite les informations d'un nouvel utilisateur
     *
     * @return void
     */
    public function enregistrer()
    {

        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // Validation
        if (
            empty($_POST["prenom"]) ||
            empty($_POST["nom"]) ||
            empty($_POST["courriel"]) ||
            empty($_POST["mdp"])
        ) {
            header("location:compte-creer?infos_absentes=1");
            exit();
        }

        // Envoyer les infos au modèle
        $modele = new Admin;

        $succes = $modele->ajouter(
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["courriel"],
            $_POST["mdp"]
        );

        // rediriger si succes a la requete
        if ($succes) {
            header("location:connexion?creation_reussi=1");
            exit();
        }
        // redirection si echec de la requete
        header("location:compte-creer?echec_creation_compte=1");
        exit();
    }


    /**
     * affiche la vue du formulaire de connexion pour employer et Boss
     *
     * @return void
     */
    public function connexion()
    {

        include("views/connexion.view.php");
    }



    /**
     * valider et connecter l'utilisateur
     *
     * @return void
     */
    public function connecter()
    {

        // validation post
        if (
            empty($_POST["courriel"]) ||
            empty($_POST["mdp"])
        ) {
            header("location: connexion?infos_requises=1");
            exit();
        }

        // recuperer l'utilisateur
        $modele = new Admin;
        $utilisateur = $modele->parCourriel($_POST["courriel"]);

        // Valider que l'utilisateur existe ET que son mot de passe est valide
        if (!$utilisateur || !password_verify($_POST["mdp"], $utilisateur->mot_de_passe)) {
            header("location: connexion?infos_invalides=1");
            exit();
        }

        // Créer elements de la session
        $_SESSION["utilisateur_id"] = $utilisateur->id;

        $_SESSION["est_connecte"] = true;

        // Rediriger
        header("location: liste-menu?succes_connexion=1");
        exit();
    }


    /**
     * deconnecté l'utilisateur
     *
     * @return void
     */
    public function deconnecter()
    {
        session_destroy();
        header("location: connexion?succes_deconnexion=1");
        exit();
    }


    // Affiche la vue avec la liste des employes
    public function listeEmployer()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        $modele = new Admin;
        $infos_employes = $modele->recupererEmployes();

        // validation pour les droits d'acces de l'admin
        if ($_SESSION["utilisateur_id"] != 1) {
            header("location: liste-menu");
            exit();
        }

        include("views/liste-employer.view.php");
    }


    /**
     * suppression d'un employer
     *
     * @return void
     */
    public function suppressionEmployer()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation
        if (empty($_GET["id"])) {
            header("location:liste-employer?erreur=1");
            exit();
        }

        // Appeler le modèle pour supprimer un le contenue
        $modele = new Admin;
        $supprimer_employer = $modele->supprimerEmployer($_GET["id"]);

        // Rediriger l'utilisateur selon le résultat de la suppression
        if ($supprimer_employer == true) {
            header("location: liste-employer?contenue_supprimer=1");
            exit();
        } else {
            header("location: liste-employer?echec_suppression=1");
            exit();
        }
    }


    /**
     * Affiche la vue du formulaire de modification d'employer
     */
    public function formulaireModificationEmployer()
    {

        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"]) == true) {
            header("location: connexion");
            exit();
        }

        // validation
        if (empty($_GET["id"])) {
            header("location:formulaire-modification-employer?erreur-survenue=1");
            exit();
        }

        // recuperé info sur un employer a la fois avec son id
        $modele = new Admin;
        $employe = $modele->recupererEmploye($_GET["id"]);

        // validation pour les droits d'acces de l'admin
        if ($_SESSION["utilisateur_id"] != 1) {
            header("location: liste-menu");
            exit();
        }

        include("views/formulaire-modification-employer.view.php");
    }


    /**
     * traitement de modification d'un employer
     *
     * @return void
     */
    public function ModificationEmployer()
    {
        // Protection de la route 
        if (empty($_SESSION["utilisateur_id"])) {
            header("location: connexion");
            exit();
        }

        // Validation du formulaire
        if (empty($_POST["id"]) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["courriel"])) {
            header("location:formulaire-modification-employer?info-manquante=1&id=" . $_POST["id"]);
            exit();
        }

        // Variables
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $courriel = $_POST["courriel"];
        $mot_de_passe = $_POST["mdp"];

        // Requête pour modifier les infos dans la base de données
        $modele = new Admin;

        if (empty($mot_de_passe)) {
            // requete pour modifier les infos modifierInfosSansMotDePasse sans mot de passe
            $succes = $modele->modifierInfosSansMotDePasse($id, $nom, $prenom, $courriel);
        } else {
            // requete pour modifier les infos avec le  mot de passe
            $succes = $modele->modifierInfos($id, $nom, $prenom, $courriel, $mot_de_passe);
        }

        // Redirection
        if ($succes) {
            header("location:liste-employer?succes-modification=1");
            exit();
        } else {
            header("location:formulaire-modification-employer?modification-echoue=1&id=" . $_POST["id"]);
            exit();
        }
    }
}
