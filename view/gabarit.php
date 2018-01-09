<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="assets/css/materialize.min.css"/>
    <link rel="stylesheet" href="assets/css/gradient.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title><?= $titre ?></title>
</head>
<body>
<header>
    <div class="navbar-fixed">
        <nav class="gradient-45deg-green-teal">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Carnet</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="?action=addcontact">Ajouter un contact</a></li>
                </ul>
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="?action=addcontact">Ajouter un contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    <?= $contenu ?>
</main>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/materialize.min.js"></script>
<script src="assets/js/jscript.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
</html>