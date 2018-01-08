<?php $this->titre = "Contact n° ".$contact['id']; ?>

<div class="row">
    <div class="col s12 l10 offset-l1">
        <p class="bold center-align"><?= $contact['nom'].' '.$contact['prenom'] ?></p>
        <p class="valign-wrapper"><i class="material-icons" style="margin-right: 8px">email</i><?= $contact['mail'] ?></p>
    </div>
</div>
