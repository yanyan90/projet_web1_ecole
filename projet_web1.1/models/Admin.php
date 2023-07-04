<?php

namespace Model;

use Base\Model;

class Admin extends Model
{
    protected $table = "administrateurs";

    /**
     * Ajoute un nouvel utilisateur
     *
     * @param string $prenom
     * @param string $nom
     * @param string $courriel
     * @param string $mdp
     *
     * 
     * @return bool
     */
    public function ajouter(string $prenom, string $nom, string $courriel, string $mdp)
    {
        $sql = "INSERT INTO $this->table 
                    (prenom, nom, courriel, mot_de_passe) 
                VALUES 
                    (:prenom, :nom, :courriel, :mot_de_passe)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,

            // Encryption du mot de passe
            ":mot_de_passe" => password_hash($mdp, PASSWORD_DEFAULT)
        ]);
    }


    /**
     * Récupère un utilisateur, s'il existe, en fonction du courriel
     *
     * @param string $courriel
     * 
     * @return StdClass
     */
    public function parCourriel($courriel)
    {
        $sql = "SELECT id, mot_de_passe
                FROM $this->table
                WHERE courriel = :courriel";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":courriel" => $courriel
        ]);

        return $requete->fetch();
    }


    /**
     * recuperes tous les employés
     *
     * @return array
     */
    public function recupererEmployes()
    {

        $sql = "SELECT *
                FROM $this->table";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }


    /**
     * suppression d'un compte employer.
     *
     * @param int $id
     * @return bool
     */
    public function supprimerEmployer($id)
    {

        $sql = "DELETE FROM $this->table
        WHERE administrateurs.id = :administrateur_id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([":administrateur_id" => $id]);
    }


    /**
     * recuperer un employer a la fois par sont id
     *
     * @param [int] $id
     * @return StdClass
     */
    public function recupererEmploye($id)
    {
        $sql = "SELECT 
                     administrateurs.id,
                     administrateurs.nom,
                     administrateurs.prenom,
                     administrateurs.courriel,
                     administrateurs.mot_de_passe
                FROM $this->table
                WHERE administrateurs.id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":id" => $id,
        ]);

        return $requete->fetch();
    }


    /**
     * modifie nom , prenom et courriel de la table Administrateurs
     *
     * @param [int] $id
     * @param [string] $nom
     * @param [string] $prenom
     * @param [string] $courriel
     * @return bool
     */
    public function modifierInfos($id, $nom, $prenom, $courriel, $mot_de_passe)
    {
        $sql = "UPDATE $this->table
        SET
            nom = :nom,
            prenom = :prenom,
            courriel = :courriel,
            mot_de_passe = :mot_de_passe
        WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":id" => $id,
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":courriel" => $courriel,
            // Encryption du mot de passe
            ":mot_de_passe" => password_hash($mot_de_passe, PASSWORD_DEFAULT),
        ]);
    }

    public function modifierInfosSansMotDePasse($id, $nom, $prenom, $courriel)
    {
        $sql = "UPDATE $this->table
    SET
        nom = :nom,
        prenom = :prenom,
        courriel = :courriel
    WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":id" => $id,
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":courriel" => $courriel,
        ]);
    }
}
