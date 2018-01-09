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
        $vue->generer(array('contact' => $contact));
    }

    public function contactedit($idContact) {
        $contact= $this->contact->getContact($idContact);
        $vue = new View("Editcontact");
        $vue->generer(array('contact' => $contact));
    }

    public function contactform($ins){
        $a  = 'Contact ajouté';
        if(!empty($ins['nom'])){$nom = htmlentities($ins['nom']);}else{$nom = '';}
        if(!empty($ins['prenom'])){$prenom = htmlentities($ins['prenom']);}else{$prenom = '';}
        if(!empty($ins['mail'])){$mail = htmlentities($ins['mail']);}else{$mail = '';}
        if(!empty($ins['tel'])){$tel = htmlentities($ins['tel']);}else{$tel = '';}
        if(!empty($ins['image'])){$img = htmlentities($ins['img']);}else{$img = 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-384586.png';}
        if(!empty($ins['society'])){$society = htmlentities($ins['society']);}else{$society = '';}
        if(!empty($ins['adress'])){$adress = htmlentities($ins['adress']);}else{$adress = '';}
        if(!empty($ins['zipcode'])){$zipcode = htmlentities($ins['zipcode']);}else{$zipcode = '';}
        if(!empty($ins['city'])){$city = htmlentities($ins['city']);}else{$city = '';}
        if(!empty($ins['country'])){$country = htmlentities($ins['country']);}else{$country = '';}
        $req = $this->contact->addContact($nom,$prenom,$mail,$tel,$img,$society,$adress,$zipcode,$city,$country);
    }
    }