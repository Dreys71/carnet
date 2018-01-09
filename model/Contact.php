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
            throw new Exception("Aucun contact ne correspond à l'identifiant '$idContact'");
    }

    public function addContact($nom,$prenom,$mail,$tel,$image,$society,$adress,$zipcode,$city,$country){
        $sql = 'INSERT INTO contact(nom,prenom,mail,tel,img_link,society,adress,zipcode,city,country) VALUES(:nom,:prenom,:mail,:tel,:img_link,:society,:adress,:zipcode,:city,:country)';
        $a = ["nom" => $nom,"prenom"=>$prenom,"mail"=>$mail,"tel"=>$tel,"img_link"=>$image,"society"=>$society,"adress"=>$adress,"zipcode"=>$zipcode,"city"=>$city,"country"=>$country];
        $req = $this->executerRequete($sql,$a);
    }
}