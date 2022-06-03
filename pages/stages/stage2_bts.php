<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Stage de deuxième année de BTS"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Stage de deuxième année de BTS SIO</h5>
                <p class="card-text">Stage effectué chez Engie Home Services.</p>
                <div class="text-center">
                    <a href="xxx" class="btn btn-primary" target="_blank">Rapport de stage</a>
                </div><br>
                <div class="text-center">
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#globalModal" role="button">Activités & compétences</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="stage.php" class="btn btn-primary">Retour au parcours</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>

    <div class="modal fade" id="globalModal" aria-hidden="true" aria-labelledby="globalModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Activités & compétences</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    blablabla
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button class="btn btn-primary" data-bs-target="#FtpModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #1</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="FtpModal" aria-hidden="true" aria-labelledby="FtpModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Mise en place d'un service FTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/pvjdYrv/ftp-logo.png" alt="FTP"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Travailler en mode projet <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#ReftabModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #2</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ReftabModal" aria-hidden="true" aria-labelledby="ReftabModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Solution d'assets management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/bLM9pBS/reftab.jpg" alt="Reftab"><br><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Répondre aux incidents et aux demandes d'assistance et d'évolution <strong>#</strong><br>
                        <strong>#</strong> Développer la présence en ligne de l'organisation <strong>#</strong><br>
                        <strong>#</strong> Travailler en mode projet <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#JiraModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #3</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="JiraModal" aria-hidden="true" aria-labelledby="JiraModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Gestion d'incidents</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/dMVLnGK/jira.png" alt="Jira"><br><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Répondre aux incidents et aux demandes d'assistance et d'évolution <strong>#</strong><br>
                        <strong>#</strong> Travailler en mode projet <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#PowershellModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #4</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="PowershellModal" aria-hidden="true" aria-labelledby="PowershellModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Scripting Powershell</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/HCtjBmD/powershell.png" alt="Powershell"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Répondre aux incidents et aux demandes d'assistance et d'évolution <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#SharepointModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #5</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SharepointModal" aria-hidden="true" aria-labelledby="SharepointModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Mise en place d'un nouvel intranet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/846Xgny/sharepoint.png" alt="Sharepoint"><br><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Développer la présence en ligne de l'organisation <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#VMWareModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #6</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="VMWareModal" aria-hidden="true" aria-labelledby="VMWareModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Virtualisation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/JRVYP7g/vmware-esxi-vcenter.png" alt="VMWare vSphere"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button class="btn btn-primary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>