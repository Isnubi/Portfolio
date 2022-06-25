<!doctype html>
<html lang="fr">
<head>
    <?php $title = "CDD - Mairie de Villeparisis"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Emploi saisonnier à la Mairie de Villeparisis - Été 2022</h5>
                <p class="card-text">Emploi saisonnier, au service scolaire-restauration pendant quatre semaines,
                    du 04 juillet 2021 au 31 août 2021.</p>
                <p class="card-text">Missions réalisées :<br><br>
                        Vérification de dossier d'inscription péri et extrascolaire<br>
                        Calculs de quotients familiaux pour connaître le tarif des repas et des journées de centre pour les familles<br>
                        Saisie des dossiers sur le logiciel Fushia (développé par la société Sistec)
                </p>
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