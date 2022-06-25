<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Veille technologique"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card bg-white-transparent border-white-transparent text-grey text-center p-3 mb-5 rounded shadow-sm"> <!--Carte présentant la veille technologique-->
            <div class="card-body">
                <h5 class="card-title">La veille technologique</h5>
                <p class="card-text">La veille technologique, élément de veille stratégique, 
                consiste à surveiller les évolutions technologiques, les innovations dans un 
                secteur d'activité donné.</p>
                <p class="card-text">Elle comprend, notamment, la surveillance, la collecte, 
                le partage et la diffusion d'informations permettant d'anticiper ou de s'informer 
                sur des changements en matière de recherche, de développement, de dépôt de brevet, 
                de lancement de nouveaux produits, matériaux, concepts, innovation de fabrication, 
                etc...</p>
                <br>
                <p class="card-text">Pour réaliser cette veille, j'ai utilisé différents outils de veille, tel que
                <em>Feedly, des newsletters</em>.</p>
                <p class="card-text">Le thème de cette veille sera les <strong>technologies</strong> de <strong>virtualisation VMWare</strong>.</p>
                <p class="card-text">La volonté des entreprises de réduire leur impact environnemental passe notamment par la réduction du
                    nombre d'équipements hébergés en datacenter. Pour cela, une majorité des entreprises se tournent vers le cloud, ou la virtualisation.
                    VMWare, un des leaders du secteur, ne cesse de développer de nouveaux outils et technologies pour rendre, toujours plus viable, ce procédé.
                </p>
            </div>
        </div>

        <div class="card-deck">
            <!--
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="" alt="Article 3">
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <p class="card-text">Date de l'article : //.</p>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
            -->
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/18TKW06/vmware-spring-gateway.png" alt="Article 3">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Vulnérabilité dans VMware Spring Cloud Gateway</h5>
                    <p class="card-text">Une vulnérabilité a été découverte dans VMware Spring Cloud Gateway. Elle permet à un attaquant de forger une requête malveillante spécialement conçue afin de provoquer une exécution de code arbitraire à distance.</p>
                    <p class="card-text">Date de l'article : 03/03/2022.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.cert.ssi.gouv.fr/alerte/CERTFR-2022-ALE-002/" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/DYPrXNC/vmware-nvidia.png" alt="Article 3">
                </div>
                <div class="card-body">
                    <h5 class="card-title">VMware et Nvidia collaborent sur une plateforme de cloud hybride alimentée par l’IA</h5>
                    <p class="card-text">VMware décide d’intégrer la nouvelle génération révolutionnaire du cloud hybride. Pour ce faire, elle s’associe à Nvidia dans une plateforme alimentée par l’IA. </p>
                    <p class="card-text">Date de l'article : 24/02/2022.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.lebigdata.fr/vmware-nvidia-association" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
        </div>  
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/gWHbJBQ/vmware.jpg" alt="Article 3">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Des bugs critiquent ouvrent VMWare ESXi, Fusion et Workstation aux hackers</h5>
                    <p class="card-text">Un groupe de cinq vulnérabilités de sécurité pourrait entraîner une série de problèmes et d'attaques, notamment l'éxecution arbitraire de commande et du déni de service.</p>
                    <p class="card-text">Date de l'article : 16/02/2022.</p>
                </div>
                <div class="card-footer">
                    <a href="https://threatpost.com/critical-vmware-bugs-esxi-fusion-workstation/178461/" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/P6MNyp1/log4j-2-1200-w1200.jpg" alt="Article 2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Log4j : Les attaquants continuent de cibler les serveurs VMware Horizon</h5>
                    <p class="card-text">VMware invite ses clients à appliquer les dernières directives afin de résoudre les vulnérabilités CVE-2021-44228 et CVE-2021-4504.</p>
                    <p class="card-text">Date de l'article : 24/01/2022.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.zdnet.fr/actualites/log4j-les-attaquants-continuent-de-cibler-les-serveurs-vmware-horizon-39936163.htm" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header text-center">
                    <img class="card-img-top img-documentation" src="https://i.ibb.co/9h90yFk/Microsoft-Azure-VMware.png" alt="Article 1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Azure VMware Solution, un service pour migrer simplement un Cloud privé VMware vers Microsoft Azure</h5>
                    <p class="card-text">VMware et Microsoft ont aboli la frontière entre Cloud public et Cloud privé. La solution Azure VMware Solution (AVS) permet de créer un système d’information hybride réellement sans couture entre l’infrastructure VMware on-premise de l’entreprise et le Cloud public Microsoft Azure.</p>
                    <p class="card-text">Date de l'article : 03/01/2022.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.zdnet.fr/actualites-partenaires/azure-vmware-solution-un-service-pour-migrer-simplement-un-cloud-prive-vmware-vers-microsoft-azure-39934473.htm" class="btn btn-primary" target="_blank">
                        Lien vers l'article
                    </a>
                </div>
            </div>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>