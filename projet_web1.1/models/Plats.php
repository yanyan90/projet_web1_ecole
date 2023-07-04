<?php

namespace Model;

use Base\Model;

class Plats extends Model
{
    protected $table = "plats";

    /**
     * recupere une image de la table plats dans categorie entree
     *
     * @return StdClass
     */
    public function getImagesEntrees()
    {
        $sql = "SELECT plats.image
            FROM `plats` 
            WHERE categorie_id = :id
              AND plats.image IS NOT NULL
            ORDER BY RAND()
            LIMIT 1";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 1]);

        return $requete->fetch();
    }

    /**
     * recupere une image de la table plats dans categorie plat-principaux
     *
     * @return StdClass
     */
    public function getImagesPlats()
    {

        $sql = "SELECT plats.image
        FROM `plats` 
        WHERE categorie_id = :id
          AND plats.image IS NOT NULL
        ORDER BY RAND()
        LIMIT 1";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 2]);

        return $requete->fetch();
    }

    /**
     * recupere une image de la table plats dans categorie desserts
     *
     * @return StdClass
     */
    public function getImagesDesserts()
    {

        $sql = "SELECT plats.image
            FROM `plats` 
            WHERE categorie_id = :id
              AND plats.image IS NOT NULL
            ORDER BY RAND()
            LIMIT 1";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 3]);

        return $requete->fetch();
    }




    /**
     * recupérer tous les entrées
     *
     * @return array
     */
    public function recupererEntrees()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 1]);

        return $requete->fetchAll();
    }


    /**
     * recupérer tous les plats principaux
     *
     * @return array
     */
    public function recupererPlats()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 2]);

        return $requete->fetchAll();
    }


    /**
     * recupérer tous les desserts
     *
     * @return array
     */
    public function recupererDesserts()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 3]);

        return $requete->fetchAll();
    }


    /**
     * récupéré tous les entrees pour la page liste-menu
     *
     * @return array
     */
    public function recupererEntree()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 1]);

        return $requete->fetchAll();
    }


    /**
     * récupéré tous les plats pour la page liste-menu
     *
     * @return array
     */
    public function recupererPlat()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 2]);

        return $requete->fetchAll();
    }


    /**
     * récupéré tous les entrees pour la page liste-menu
     *
     * @return array
     */
    public function recupererDessert()
    {
        $sql = "SELECT * 
                FROM `plats` 
                WHERE categorie_id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([":id" => 3]);

        return $requete->fetchAll();
    }


    /**
     * requete pour supprimer contenue
     *
     * @param [int] $id
     * @return bool
     */
    public function supprimerContenue($id)
    {

        $sql = "DELETE FROM $this->table
        WHERE plats.id = :platsId";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([":platsId" => $id]);
    }


    /**
     * recuperer liste des categories dans table categorie
     *
     * @return array
     */
    public function recupereCategorie()
    {
        $sql = "SELECT*
        FROM categories";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }


    /**
     * Ajouter un plats
     *
     * @param string $nom
     * @param string $categorie
     * @param int $utilisateur_id
     * @param string|null $image
     * @return bool
     */
    public function ajouter($nom, $description, $prix, $categorie, $image)
    {
        $sql = "INSERT INTO $this->table (nom , description , prix , categorie_id, image ) VALUES (:nom, :description , :prix , :categorie_id , :image )";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":description" => $description,
            ":prix" => $prix,
            ":categorie_id" => $categorie,
            ":image" => $image
        ]);
    }


    /**
     * requete pour recuperer information d'un plats par id
     *
     * @param int $id
     * @return StdClass
     */
    public function modificationFormulaire($id)
    {
        $sql = "SELECT 
                     plats.id,
                     plats.nom,
                     plats.description,
                     plats.prix,
                     plats.image
                FROM plats
                WHERE plats.id = :id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":id" => $id,
        ]);

        return $requete->fetch();
    }


    /**
     * Undocumented function
     *
     * @param int $id
     * @param string $nom
     * @param string $description
     * @param decimal/int $prix
     * @param string $categorie
     * @param  $image
     * @return bool
     */
    public function envoisFormulaire($id, $nom, $description, $prix, $categorie_id, $image)
    {
        $sql = "UPDATE $this->table
        SET
            nom = :nom,
            description = :description,
            prix = :prix,
            categorie_id = :categorie_id,
            image = :image
        WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":id" => $id,
            ":nom" => $nom,
            ":description" => $description,
            ":prix" => $prix,
            ":categorie_id" => $categorie_id,
            ":image" => $image,
        ]);
    }
}
