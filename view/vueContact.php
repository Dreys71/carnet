<?php $this->titre = "Contact n° ".$contact['id']; ?>

<div class="row">
    <div class="col s12 l10 offset-l1">
        <p class="bold center-align"><?= $contact['nom'].' '.$contact['prenom'] ?></p>

        <div class="col s12 l8">
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 8px">email</i><?= $contact['mail'] ?></p>
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 5px;">phone</i><?= $contact['tel'] ?></p>
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 5px;">business</i><?= $contact['society'] ?></p>
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 5px;">location_on</i><?= $contact['adress'] ?></p>
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 5px;">location_on</i><?= $contact['zipcode'].' '.$contact['city'].' '. $contact['country']?></p>
            </div>
        <div class="col s12 l4">
            <img src="<?= $contact['img_link'] ?>" style="width: 100%">
        </div>
        <div class="col s12">
            <a href="<?= "index.php?action=edit&id=" . $contact['id'] ?>" class="gradient-45deg-green-teal gradient-shadow btn">Modifier le contact</a>
        </div>
    </div>
</div>
