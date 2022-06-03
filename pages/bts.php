<!doctype html>
<html lang="fr">
<head>
    <?php $title = "BTS SIO"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">BTS Services Informatiques aux Organisations</h5>
                <p class="card-text">Le Brevet de Technicien Supérieur, Services Informatiques aux Organisations 
                (BTS SIO), s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur réseaux ou de développeur, 
                afin d'intégrer directement le marché du travail ou continuer des études, dans le domaine de l'informatique.</p>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-body text-grey">
                    <h5 class="card-title">Solutions d'Infrastructures, Systèmes et Réseaux</h5>
                    <p class="card-text">L'option SISR est destinée aux étudiant(e)s qui souhaitent s'orienter 
                    vers les métiers liés à la conception et la maintenance des infrastructures réseaux.</p>
                    <p class="card-text">Assurer la sécurité, la maintenance et l'installation des équipements 
                    dans ces infrastructures réseaux font partie des principales missions des futurs administrateurs, 
                    techniciens ou pilotes d'exploitation réseaux.</p>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-body text-grey">
                    <h5 class="card-title">Solutions Logicielles et Applications Métiers</h5>
                    <p class="card-text">L'option SLAM est destinée aux étudiant(e)s qui s'orientent vers les métiers 
                    liés à la conception et la maintenance des programmes applicatifs.</p>
                    <p class="card-text">Gérer l'intégration, la sécurisation, le développement et la maintenance de 
                    ces programmes applicatifs font partie des principales missions des futurs développeurs, 
                    analystes ou techniciens d'applications informatique.</p>
                </div>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <p class="card-text">Des cours plus généraux viendront compléter la formation et apporter 
                des compétences plus générales, permettant ainsi aux diplômé(e)s d'être opérationnel(le)s 
                dans tout type d'entreprise.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="/index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>