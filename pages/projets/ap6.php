<!doctype html>
<html lang="fr">
<head>
    <?php $title = "AP #6"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Sécurité d'un réseau</h5>
                <p class="card-text">Mettre en place une sécurité logique et physique au sein d'un système d'information vieillissant et
                vulnérable à de nombreuses failles et possibilités d'attaque.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Gérer le patrimoine informatique<br>
                    Mettre à disposition des utilisateurs un service informatique<br>
                    Répondre aux incidents et aux demandes d'assistances et d'évolution
                </p><br>
                <div class="text-center">
                    <a href="/public/album/AP/SUJET_Securite-reseau.pdf" target="_blank" class="btn btn-primary">Accès au sujet</a><br><br>
                    <a href="/public/album/AP/GAMBART_Securite-reseau.pdf" target="_blank" class="btn btn-primary">Accès à la production associée</a><br><br>
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