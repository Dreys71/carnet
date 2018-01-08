<?php
abstract class Modele {
    private $bdd;


    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->connectBdd()->query($sql);
        }
        else {
            $resultat = $this->connectBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function connectBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('mysql:host=localhost;dbname=carnet;charset=utf8',
                'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

}