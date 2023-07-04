<?php

$routes = [
    // route => [controller, méthode]

    // Accueil site web
    "index" => ["SiteController", "index"],

    // page menu site web
    "menu" => ["SiteController", "menu"],

    // page Contactez nous site web
    "contact" => ["SiteController", "contact"],

    // page À-propos site web
    "a-propos" => ["SiteController", "aPropos"],

    // traite l'information jusqu'a la bdd infolettres
    "envoyer-infolettre" => ["SiteController", "EnvoyerInfolettre"],

    // traite l'information jusqu'a la bdd infolettres
    "envoyer-infolettre-popup" => ["SiteController", "EnvoyerInfolettrePopup"],

    // formulaire de creation de compte employer
    "compte-creer" => ["AdminController", "creer"],

    // Traitement de la création d'un compte
    "compte-enregistrer" => ["AdminController", "enregistrer"],

    // connexion
    "connexion" => ["AdminController", "connexion"],

    // Traitement de la connexion
    "connecter" => ["AdminController", "connecter"],

    // Page  liste de plats / menu
    "liste-menu" => ["MenuController", "index"],

    // Traitement de la déconnexion
    "deconnection" => ["AdminController", "deconnecter"],

    // supprimer un repas
    "suppression" => ["MenuController", "suppression"],

    // formulaire ajout d'un plats
    "ajout-plats" => ["MenuController", "formulaireAjout"],

    // Traitement de la création d'une activité
    "plats-enregistrer" => ["MenuController", "enregistrer"],

    // formulaire de modification d'un repas
    "formulaire-modification" => ["MenuController", "formulaireModification"],

    // traitement de la modification d'un plats
    "modification-plats" => ["MenuController", "modificationPlats"],

    // page liste des employés
    "liste-employer" => ["AdminController", "listeEmployer"],

    // suppression d'un employer
    "suppression-employer" => ["AdminController", "suppressionEmployer"],


    // formulaire de modification d'un d'employés
    "formulaire-modification-employer" => ["AdminController", "formulaireModificationEmployer"],

    // traitement de modification d'un d'employés
    "modification-employer" => ["AdminController", "ModificationEmployer"],





];
