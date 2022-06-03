<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Accueil"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="starter-template text-center py-5 px-3"> <!--Paragraphe de présentation-->
            <h1>Bienvenue sur mon portfolio !</h1>
            <p class="lead">Je m'appelle Louis GAMBART et j'ai <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/age.php'); ?> ans.<br>
            Je suis actuellement en 2ème année de BTS SIO (Services Informatiques aux Organisations), en option SISR (Solutions d'Infrastructures, Réseaux et Systèmes), au lycée Turgot à Paris 03.</p><br>
            <a href="pages/profil.php" class="btn btn-primary">Voir mon profil</a><br><br> <!--Lien menant à la page profil-->
            <a href="pages/contact.php" class="btn btn-primary">Me contacter</a> <!--Lien menant à la page de contact-->
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>