<?php $this->titre = "Ajouter un contact" ?>

<div class="row">
    <div class="col s12 l10 offset-l1">
        <form method="post" action="index.php?add">
            <div class="col s12 l6 input-field">
                <input type="text" id="nom" name="nom">
                <label for="nom">Nom</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="prenom" name="prenom">
                <label for="prenom">Prenom</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="email" id="mail" name="mail">
                <label for="mail">Mail</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="tel" name="tel">
                <label for="tel">Télephone</label>
            </div>
            <div class="col s12 l6 input-field">
                <div class="col s4">
                    <img class="preview" width="100%" src="https://cdn.shopify.com/s/files/1/1211/8882/products/what_Morty_Web_1024x1024.jpg?v=1503605193">
                </div>
                <div class="col s8">
                    <input type="text" id="img" name="image">
                    <label for="img">Lien de l'image</label>
                </div>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="society" name="society">
                <label for="society">Société</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="adress" name="adress">
                <label for="adress">Adresse</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="zipcode" name="zipcode">
                <label for="zipcode">Code Postal</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="city" name="city">
                <label for="city">Ville</label>
            </div>
            <div class="col s12 l6 input-field">
                <input type="text" id="country" name="country">
                <label for="country">Pays</label>
            </div>
            <button type="submit" class="btn gradient-45deg-deep-orange-orange gradient-shadow">Ajouter</button>
        </form>
    </div>
</div>