<!doctype html>
<html lang="fr">
<head>
    <?php $title = "AP #4"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Veille technologique</h5>
                <p class="card-text">Choix d'un sujet de veille et mise en place d'outils de veille.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Organiser son développement professionnel
                </p><br>
                <div class="text-center">
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlGZIeZ276wc_Q-OQ" target="_blank" class="btn btn-primary">Accès au sujet</a><br><br>
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlGN6gHfx_F6CY5qQ" target="_blank" class="btn btn-primary">Accès à la production</a><br><br>
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