<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Envoi réussi"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-success rounded">
            <div class="card-body text-success text-center">
                <h5 class="card-title">Email envoyé.</h5>
                <p class="card-text">Votre demande de contact a bien été envoyée.</p>
                <p class="card-text">Je vous recontacterai sous peu !</p>
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