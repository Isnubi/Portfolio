<!doctype html>
<html lang="fr">
<head>
    <?php $title = "AP #5"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Mise en place d'une infrastructure réseau</h5>
                <p class="card-text">Mettre en place une infrastructure réseau complète comprenant plusieurs réseaux,
                    des VLAN, du routage inter-VLAN, un serveur DHCP ainsi que ses relais.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Gérer le patrimoine informatique<br>
                    Mise à disposition des utilisateurs un service informatique
                </p><br>
                <div class="text-center">
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlGRPE3t1VtZNkU7s" target="_blank" class="btn btn-primary">Accès au sujet</a><br><br>
                    <a href="https://1drv.ms/b/s!Ao2b5EOSGdNPlGHVOLhH-AMN-ocr" target="_blank" class="btn btn-primary">Accès à la production associée</a><br><br>
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