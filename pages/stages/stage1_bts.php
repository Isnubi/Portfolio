<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Stage de première année de BTS"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Stage de première année de BTS SIO</h5>
                <p class="card-text">Stage effectué chez TimeTonic.</p>
                <div class="text-center">
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlFzaTyIn-VMMEW5l" class="btn btn-primary" target="_blank">Rapport de stage</a>
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
                    <button class="btn btn-primary" data-bs-target="#AssistanceModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #1</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AssistanceModal" aria-hidden="true" aria-labelledby="AssistanceModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Assistance aux utilisateurs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/zQpNdQh/timetonic.png" alt="TimeTonic"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Répondre aux incidents et aux demandes d'assistance et d'évolution <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#AuditModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #2</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AuditModal" aria-hidden="true" aria-labelledby="AuditModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Audit interne</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/v13kcrG/cyber-security-vector-logo-with-shield-and-check-mark.jpg" alt="Cybersécurité"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Gérer le patrimoine informatique <strong>#</strong><br>
                        <strong>#</strong> Travailler en mode projet <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#SupportModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #3</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SupportModal" aria-hidden="true" aria-labelledby="SupportModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Gestion d'incidents</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/THG7NH7/zendesk.png" alt="Zendesk"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Répondre aux incidents et aux demandes d'assistance et d'évolution <strong>#</strong><br>
                        <strong>#</strong> Mettre à disposition des utilisateurs un service informatique <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#KeynoteModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #4</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="KeynoteModal" aria-hidden="true" aria-labelledby="KeynoteModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Keynote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/zQpNdQh/timetonic.png" alt="TimeTonic"><br>
                    <p>
                        <strong>Compétences associées</strong><br>
                        <strong>#</strong> Développer la présence en ligne de l'organisation <strong>#</strong><br>
                        <strong>#</strong> Travailler en mode projet <strong>#</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#globalModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activités & compétences</button>
                    <button class="btn btn-primary" data-bs-target="#SensibilisationModal" data-bs-toggle="modal" data-bs-dismiss="modal">Activité #5</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SensibilisationModal" aria-hidden="true" aria-labelledby="SensibilisationModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Sensibilisation à la cybersécurité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/v13kcrG/cyber-security-vector-logo-with-shield-and-check-mark.jpg" alt="Cybersécurité"><br>
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