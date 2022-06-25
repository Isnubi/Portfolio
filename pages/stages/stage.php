<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Parcours professionnel"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body">
                <h5 class="card-title text-center">Stages</h5>
            </div>
        </div>
        <div class="card-deck"> <!--Carte dédiée à chaque stage effectué-->
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/tJXtPS0/villeparisis.png" alt="Mairie de Villeparisis">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mairie de Villeparisis</h5>
                    <p class="card-text">Stage effectué du 27/05/2017 au 31/07/2017.</p>
                    <div class="text-center">
                        <a href="stage_3eme.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <!--<div class="card border-0 bg-transparent mb-5 rounded"></div>   carte transparente-->
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/zQpNdQh/timetonic.png" alt="TimeTonic">
                </div>
                <div class="card-body">
                    <h5 class="card-title">O'Mailey SAS - TimeTonic</h5>
                    <p class="card-text">Stage effectué du 17/05/2021 au 25/06/2021.</p>
                    <div class="text-center">
                        <a href="stage1_bts.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/vLSR33s/ehs-logo.png" alt="Engie Home Services">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Engie Home Services</h5>
                    <p class="card-text">Stage effectué du 29/11/2021 au 21/01/2022.</p>
                    <div class="text-center">
                        <a href="stage2_bts.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body">
                <h5 class="card-title text-center">Expériences professionnelles</h5>
            </div>
        </div>
        <div class="card-deck"> <!--Carte dédiée à chaque stage effectué-->
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/tJXtPS0/villeparisis.png" alt="Mairie de Villeparisis">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mairie de Villeparisis</h5>
                    <p class="card-text">CDD effectué du 19/07/2017 au 13/08/2017.</p>
                    <div class="text-center">
                        <a href="cdd_mairie_ete2021.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/zQpNdQh/timetonic.png" alt="TimeTonic">
                </div>
                <div class="card-body">
                    <h5 class="card-title">O'Mailey SAS - TimeTonic</h5>
                    <p class="card-text">CDD effectué du 16/08/2021 au 27/08/2021.</p>
                    <div class="text-center">
                        <a href="cdd_timetonic_ete2021.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/tJXtPS0/villeparisis.png" alt="Mairie de Villeparisis">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mairie de Villeparisis</h5>
                    <p class="card-text">CDD effectué du 04/07/2017 au 31/08/2017.</p>
                    <div class="text-center">
                        <a href="cdd_mairie_ete2022.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>