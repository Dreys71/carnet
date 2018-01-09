<?php $this->titre = "Editer un contact" ?>

<div class="row">
    <div class="col s12 l10 offset-l1">
        <form method="post" action="index.php?add">
            <input type="hidden" name="id" value="<?= $contact['id']?>">
            <div class="col s12 l6 input-field">
                <input type="text" id="nom" name="nom" value="<?= $contact['nom']?>">
                <label for="nom">Nom</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="prenom" name="prenom" value="<?= $contact['prenom']?>">
                <label for="prenom">Prenom</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="email" id="mail" name="mail" value="<?= $contact['mail']?>">
                <label for="mail">Mail</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="tel" name="tel" value="<?= $contact['tel']?>">
                <label for="tel">Télephone</label>
            </div>
            <div class="col s12 l6 input-field">
                <div class="col s4">
                    <img class="preview" width="100%" src="<?= $contact['img_link']?>">
                </div>
                <div class="col s8">
                    <input type="text" id="img" name="image" value="<?= $contact['img_link']?>">
                    <label for="img">Lien de l'image</label>
                </div>

            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="society" name="society" value="<?= $contact['society']?>">
                <label for="society">Société</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="adress" name="adress" value="<?= $contact['adress']?>">
                <label for="adress">Adresse</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="zipcode" name="zipcode" value="<?= $contact['zipcode']?>">
                <label for="zipcode">Code Postal</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="city" name="city" value="<?= $contact['city']?>">
                <label for="city">Ville</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="country" name="country" value="<?= $contact['country']?>">
                <label for="country">Pays</label>
            </div>
            <button type="submit" class="btn gradient-45deg-deep-orange-orange gradient-shadow">Editer</button>
        </form>
    </div>
</div>