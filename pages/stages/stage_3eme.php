<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Stage de troisième"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Stage de 3ème</h5>
                <p class="card-text">Stage effectué dans le service informatique de la Mairie de Villeparisis (77270).</p>
                <div class="text-center">
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlFqk_KFunlADy_i0" class="btn btn-primary" target="_blank">Rapport de stage</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="stage.php" class="btn btn-primary">Retour au parcours</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>