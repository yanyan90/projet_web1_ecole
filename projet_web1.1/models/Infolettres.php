<?php

namespace Model;

use Base\Model;

class Infolettres extends Model
{
    protected $table = "infolettres";

    /**
     * ajouter information a la bdd infolettres 
     *
     * @param string $nom
     * @param [type] $email
     * @return bool
     */
    public function ajouter($nom, $email)
    {
        $sql = "INSERT INTO $this->table (nom, email) VALUES (:nom, :email)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":email" => $email
        ]);
    }

    /**
     * ajouter information a la bdd infolettres 
     *
     * @param string $nom
     * @param [type] $email
     * @return bool
     */
    public function ajouterBdd($nom, $email)
    {
        $sql = "INSERT INTO $this->table (nom, email) VALUES (:nom, :email)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":email" => $email
        ]);
    }
}
