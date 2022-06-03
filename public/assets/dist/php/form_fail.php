<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Echec de l'envoi"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-danger rounded">
            <div class="card-body text-danger text-center">
                <h5 class="card-title">Email non-envoyé.</h5>
                <p class="card-text">Votre demande de contact n'a pas pu aboutir.</p>
                <p class="card-text">Vérifiez que tous les champs soient remplis.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="/pages/contact.php" class="btn btn-primary">Retour à la page de contact</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>