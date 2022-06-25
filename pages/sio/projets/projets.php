<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Projets"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card text-grey text-center shadow p-3 mb-5 border-primary rounded">
            <div class="card-body">
                <h5 class="card-title">Les projets</h5>
                <p class="card-text">Vous y retrouverez l'ensemble des productions effectuées 
                lors des Ateliers Professionnels durant mon BTS SIO, option SISR.</p>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/1QFYrRn/cv.png" alt="CV"><br>
                    </div>
                    <h5 class="card-title">Réalisation d'un CV</h5>
                    <div class="text-center">
                        <a href="ap1.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/W3GZXrk/html.png" alt="HTML"><br>
                    </div>
                    <h5 class="card-title">Réalisation d'un portfolio</h5>
                    <div class="text-center">
                        <a href="ap2.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/j8d26zP/agile.png" alt="AGILE"><br>
                    </div>
                    <h5 class="card-title">Méthodes de conduite de projets</h5>
                    <div class="text-center">
                        <a href="ap3.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/X2HFw9y/veille.png" alt="Veille"><br>
                    </div>
                    <h5 class="card-title">Veille technologique</h5>
                    <div class="text-center">
                        <a href="ap4.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Infrastructure réseau"><br>
                    </div>
                    <h5 class="card-title">Infrastructure réseau</h5>
                    <div class="text-center">
                        <a href="ap5.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/qnXZTqY/reseau-securite-logo.png" alt="Sécurité réseau"><br>
                    </div>
                    <h5 class="card-title">Sécurité d'un réseau</h5>
                    <div class="text-center">
                        <a href="ap6.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="https://i.ibb.co/X2HFw9y/veille.png" alt="Veille technologique"><br>
                    </div>
                    <h5 class="card-title">Développement d'un outil de veille technologique</h5>
                    <div class="text-center">
                        <a href="ap7.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="xxx" alt="xxx"><br>
                    </div>
                    <h5 class="card-title">xxx</h5>
                    <div class="text-center">
                        <a href="ap8.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded text-center">
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top img-documentation" src="xxx" alt="xxx"><br>
                    </div>
                    <h5 class="card-title">xxx</h5>
                    <div class="text-center">
                        <a href="ap9.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>