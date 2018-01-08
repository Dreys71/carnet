<?php

require_once 'model/Contact.php';
require_once 'view/View.php';

class ControleurContact{

    private $contact;

    public function __construct() {
        $this->contact = new Contact();
    }

    // Affiche les détails sur un billet
    public function contact($idContact) {
        $contact= $this->contact->getContact($idContact);
        $vue = new View("Contact");
        $vue->generer(array('billet' => $contact));
    }
    }