<?php
require_once 'controller/ControllerContact.php';
require_once 'controller/ControllerAccueil.php';
require_once '/view/View.php';
class Route {
    private $ctrlAccueil;
    private $ctrlContact;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlContact = new ControleurContact();
    }

    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'contact') {
                    $idContact = intval($this->getParametre($_GET, 'id'));
                    if ($idContact != 0) {
                        $this->ctrlContact->Contact($idContact);
                    }
                    else
                        throw new Exception("Identifiant du contact non valide");
                }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

    private function erreur($msgErreur) {
        $vue = new View("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }


}