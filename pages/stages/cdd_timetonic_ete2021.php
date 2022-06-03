<!doctype html>
<html lang="fr">
<head>
    <?php $title = "CDD - TimeTonic"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">CDD chez TimeTonic</h5>
                <p class="card-text">Emploi en contrat à durée déterminée, en tant que Technicien Cybersécurité, durant deux semaines,
                    du 16 août 2021 au 27 août 2021.</p>
                <p class="card-text">Missions réalisées :<br><br>
                    Recherche d'outils d'audit de sécurité, interne et externe<br>
                    Tests de sécurité sur les noms de domaines
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