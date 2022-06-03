<!doctype html>
<html lang="fr">
<head>
    <?php $title = "AP #1"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">CV et lettre de motivation</h5>
                <p class="card-text">Réalisation d'un CV et d'une lettre de motivation afin de préparer la recherche
                de stage ainsi que notre identité professionnelle.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Organiser son développement professionnel
                </p><br>
                <div class="text-center">
                    <a href="/public/album/GAMBART_CV.pdf" target="_blank" class="btn btn-primary">Accès à la production associée</a><br><br>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="projets.php" class="btn btn-primary">Retour aux projets</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>