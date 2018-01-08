<?php
require_once 'model/Contact.php';
require_once 'view/View.php';

class ControleurAccueil {

    private $contact;

    public function __construct() {
        $this->contact = new Contact();
    }
    public function accueil() {
        $contacts = $this->contact->getContacts();
        $vue = new View("Accueil");
        $vue->generer(array('contacts' => $contacts));
    }

}