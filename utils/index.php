<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Fichier de préconfiguration"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>

<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card bg-white-transparent border-white-transparent text-grey text-center p-3 mb-5 rounded shadow-sm"> <!--Carte présentant la veille technologique-->
            <div class="card-body">
                <h5 class="card-title">Fichier de préconfiguration</h5>
                <p class="card-text">
                    Vous trouverez, ci-dessous, plusieurs fichiers de préconfiguration utilisés pour une installation automatique de systèmes Linux.
                </p>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <!--<div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/bWXKDkL/reseau1.jpg" alt="Article 1">
                </div>-->
                <div class="card-body">
                    <h5 class="card-title">Serveur web</h5>
                    <p class="card-text">Ce fichier de préconfiguration permet l'installation d'un serveur Web avec les paquets suivants :
                        <i>php, postgresql, mariadb-server, libapache2-mod-php, php-mysql</i>.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="deb.txt" class="btn btn-primary" target="_blank">
                        Lien vers le fichier
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <!--<div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/bWXKDkL/reseau1.jpg" alt="Article 1">
                </div>-->
                <div class="card-body">
                    <h5 class="card-title">Système en ligne de commande</h5>
                    <p class="card-text">Ce fichier de préconfiguration permet l'installation d'un système classique, sans aucun paquets supplémentaires, en ligne de commande.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="deb-mini.txt" class="btn btn-primary" target="_blank">
                        Lien vers le fichier
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <!--<div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/bWXKDkL/reseau1.jpg" alt="Article 1">
                </div>-->
                <div class="card-body">
                    <h5 class="card-title">Système graphique</h5>
                    <p class="card-text">Ce fichier de préconfiguration permet l'installation d'un système classique, sans aucun paquets supplémentaires, mais avec un environnement graphique.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="deb-graph.txt" class="btn btn-primary" target="_blank">
                        Lien vers le fichier
                    </a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <!--<div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/bWXKDkL/reseau1.jpg" alt="Article 1">
                </div>-->
                <div class="card-body">
                    <h5 class="card-title">Serveur OCS-GLPI</h5>
                    <p class="card-text">Ce fichier de préconfiguration permet l'installation d'un serveur Web, avec une partie des paquets nécessaires à l'installation
                        d'OCS-GLPI (gestion de parc et gestion d'incidents), contenant les paquets suivants :
                        <i>php postgresql mariadb-server libapache2-mod-php php-mysql libapache2-mod-php libapache2-mod-perl2 libapache-dbi-perl libapache-db-perl php-soap php-curl php-json php-xml php-mbstring php-gd php-pclzip php-xmlrpc perl libnet-ip-perl libxml-simple-perl libarchive-zip-perl libxml-simple-perl libcompress-zlib-perl libdbi-perl libdbd-mysql-perl libnet-ip-perl libsoap-lite-perl libio-compress-perl libapache-dbi-perl libapache2-mod-perl2 libapache2-mod-perl2-dev libdbd-mysql-perl</i>.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="deb-ocsglpi.txt" class="btn btn-primary" target="_blank">
                        Lien vers le fichier
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <!--<div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/bWXKDkL/reseau1.jpg" alt="Article 1">
                </div>-->
                <div class="card-body">
                    <h5 class="card-title">Agent OCSNG</h5>
                    <p class="card-text">Ce fichier de préconfiguration permet l'installation d'un client Linux, en ligne de commande, embarquant le paquet
                        nécessaire à l'utilisation de l'agent OCS.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="deb-ocsagent.txt" class="btn btn-primary" target="_blank">
                        Lien vers le fichier
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>