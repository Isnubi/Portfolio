<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Profil"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="row"> <!--Carte dédiée à chaque catégorie-->
            <div class="col-sm-4">
                <div class="card p-3 border-dark shadow rounded mb-5"> <!--On rajoute le max-width pour que la carte ne fasse que 25% de l'espace disponible et que l'autre carte puisse prendre 75%-->
                    <img class="card-img-top" src="https://i.ibb.co/t2L8x3L/moi.png" alt="Photo de profil">
                    <div class="card-body">
                       <h5 class="card-title">Louis GAMBART</h5>
                        <p class="card-text"><?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/age.php'); ?> ans<br>
                            Permis B<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card shadow p-3 mb-5 border-primary rounded">
                    <div class="card-body text-grey">
                        <h5 class="card-title text-center">Diplômes et formations</h5>
                        <p class="card-text"><strong>BTS Services Informatiques aux Organisations</strong><br> <!--<strong> pour mettre le texte en gras-->
                        Actuellement en 2ème année de BTS SIO, en option Solutions d'Intrastructures,
                        Systèmes et Réseaux (SISR), au lycée Turgot à Paris 03.
                        <em>Examen en 2022.</em></p> <!--<em> pour mettre le texte en italique-->

                        <p class="card-text"><strong>Baccalauréat Sciences et Technologies de l'Industrie et du Développement Durable</strong><br>
                        Baccaulauréat STI2D, obtenu avec une mention très bien, en option Systèmes d'Informations 
                        et Numérique, au lycée Gaston Bachelard à Chelles 77500.
                        <em>De septembre 2018 à juillet 2020.</em></p>

                        <p class="card-text"><strong>Brevet des Collèges</strong><br>
                        Brevet des Collèges, obtenu avec une mention très bien,
                        au collège Gérard Philipe à Villeparisis 77270.
                        <em>En juillet 2017.</em></p>
                    </div>
                </div>    
            </div>
        </div>
        <br>
        <div class="row"> <!--Carte dédiée à chaque catégorie-->
            <div class="col-sm-8">
                <div class="card shadow p-3 mb-5 border-primary rounded">
                    <div class="card-body text-grey">
                        <h5 class="card-title text-center">Expériences diverses</h5>
                        <p class="card-text"><strong>Membre du Conseil de Vie Lycéenne</strong>, <em>depuis octobre 2017.</em><br>
                            Délégué titulaire au Conseil de Vie Lycéenne et au Conseil d'administration du lycée Turgot, à Paris (75003).<br>
                            Délégué titulaire au Conseil de Vie Lycéenne et au Conseil d'administration du lycée Gaston Bachelard, à Chelles (77500).
                        </p>
    
                        <p class="card-text"><strong>Arbitre de badminton</strong>, <em>depuis février 2014.</em><br>
                        Certification nationale d'arbitrage obtenue en mai 2019.</p>
    
                        <p class="card-text"><strong>Membre du Conseil Communal d'Enfants</strong>, <em>de septembre 2011 à juillet 2014.</em><br>
                        Membre titulaire du Conseil Communal d'Enfants à la mairie de Villeparisis (77270),
                        dans la commission Environnement.</p>
                    </div>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="card p-3 border-dark shadow rounded">
                    <div class="card-body">
                        <h5 class="card-title">Atouts</h5>
                        <p class="card-text">Autonome<br>
                        Ponctuel<br>
                        Rigoureux<br>
                        Sens des relations humaines<br>
                        Respectueux</p>
    
                        <h5 class=card-title">Centres d'intérêts</h5>
                        <p class="card-text">Informatique<br>
                        Jeux-vidéos<br>
                        Astronomie<br>
                        Badminton<br>
                        Cyclisme-Tout-Terrain</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="text-center">
            <a href="/public/album/GAMBART_CV.pdf" target="_blank" class="btn btn-primary">Télécharger mon CV</a> <!--Bouton permettant d'ouvrir un CV au format PDF dans une nouvelle fenêtre-->
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>