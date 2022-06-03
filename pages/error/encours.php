<!doctype html>
<html lang="fr">
<head>
    <?php $title = "En cours"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-danger rounded">
            <div class="card-body text-danger text-center">
                <h5 class="card-title">Contenu non disponible.</h5>
                <p class="card-text">Cette page est en cours de construction ou le lien n'est pas encore actif.</p>
                <p class="card-text">Soyez patient !</p>
            </div>
        </div>
        <div class="text-center">
            <a href="/index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>