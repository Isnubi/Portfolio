<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Documentation"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Mise en place d'un domaine - Active Directory</h5>
                <p class="card-text">Procédure de mise en place d'un domaine Active Directory sur un environnement Windows Server 2019.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Mettre à disposition des utilisateurs un service informatique<br>
                    Gérer le patrimoine informatique
                </p><br>
                <div class="text-center">
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlGDAerjw_9olyEtr" target="_blank" class="btn btn-primary">Accès à la production associée</a><br><br>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="documentation.php" class="btn btn-primary">Retour aux documentations</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>