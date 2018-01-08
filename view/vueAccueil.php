<?php $this->titre = "Accueil - Carnet"; ?>
<div class="row">
    <div class="col s12 l10 offset-l1">
        <div class="col s12" style="margin-bottom: 10px;">
            <a href="index.php?action=addcontact" class="btn gradient-45deg-green-teal gradient-shadow ">Ajouter un contact</a>
        </div>
        <div class="col s12">
        <?php foreach ($contacts as $contact):
            ?>
            <div class="card col s12 l4 xl3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?= $contact['nom'] .' '. $contact['prenom'] ?><i class="material-icons right">more_vert</i></span>
                    <p><a href="<?= "index.php?action=contact&id=" . $contact['id'] ?>">Voir le profil</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?= $contact['nom'] .' '. $contact['prenom'] ?><i class="material-icons right">close</i></span>
                    <p class="valign-wrapper"><i class="material-icons" style="margin-right: 5px;">email</i><?= $contact['mail'] ?>
                        <a class="edit-link valign-wrapper orange-text" href="<?= "index.php?action=edit&id=" . $contact['id'] ?>">Modifier <i class="material-icons">edit</i></a></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    </div>
</div>
