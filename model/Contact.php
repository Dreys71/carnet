<?php
require_once "Model.php";

class Contact extends Modele {

    public function getContacts() {
        $sql = 'SELECT * FROM contact ORDER BY id DESC';
        $contacts = $this->executerRequete($sql);
        return $contacts;
    }

    public function getContact($idContact) {
        $sql = 'SELECT * FROM contact WHERE id=?';
        $contact = $this->executerRequete($sql, array($idContact));
        if (!empty($contact))
            return $contact->fetch();
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idContact'");
    }
}