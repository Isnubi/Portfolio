<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Compétences"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Compétences</h5>
                <p class="card-text">Vous trouverez, ci-dessous, un résumé de mes compétences, ainsi que le tableau de compétences en lien avec ma formation.</p>
            </div>
        </div>
        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Virtualisation</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de virtualisation sur poste client">
                    <img class="card-img-top" src="https://i.ibb.co/xCvZFHc/vmware-workstation.png" alt="VMWare Workstation">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">VMWare Workstation</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de virtualisation sur serveur">
                    <img class="card-img-top" src="https://i.ibb.co/JRVYP7g/vmware-esxi-vcenter.png" alt="VMWare vSphere">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">VMWare vSphere</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de virtualisation sur poste client">
                    <img class="card-img-top" src="https://i.ibb.co/HrD0VSS/vbox-logo.png" alt="VirtualBox">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Oracle VirtualBox</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de virtualisation basé dans le cloud">
                    <img class="card-img-top" src="https://i.ibb.co/61FLx1j/azure-logo.png" alt="Azure">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Microsoft Azure</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de virtualisation basé dans le cloud">
                    <img class="card-img-top" src="https://i.ibb.co/r5ybQ8F/gcc-logo.png" alt="Cloud Console">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Google Cloud Console</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Services applicatifs</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Protocole de transfert de fichiers">
                    <img class="card-img-top" src="https://i.ibb.co/pvjdYrv/ftp-logo.png" alt="FTP">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">FTP</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Protocole d'attribution automatique d'adresse IP">
                    <img class="card-img-top" src="https://i.ibb.co/ctzCjkt/dhcp-logo.png" alt="DHCP">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">DHCP</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Service d'annuaire basé sur LDAP">
                    <img class="card-img-top" src="https://i.ibb.co/yFDVxtB/ad.png" alt="Active Directory">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Active Directory</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Service permettant une connexion sécurisée vers un hôte distant">
                    <img class="card-img-top" src="https://i.ibb.co/fHqhXNC/ssh.png" alt="SSH">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">SSH</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Service web">
                    <img class="card-img-top" src="https://i.ibb.co/TWzdpPj/apache-logo.png" alt="Apache">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Apache</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Solution de gestion et de sécurité informatique</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de supervision d'un réseau informatique">
                    <img class="card-img-top" src="https://i.ibb.co/fQ10gf5/centreon.png" alt="Centreon">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Centreon</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outils de gestion de parc informatique et de gestion d'incidents">
                    <img class="card-img-top" src="https://i.ibb.co/FBWgDgk/ocsglpi.png" alt="OCS & GLPI">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">OCS & GLPI</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Outil de gestion d'actifs informatiques">
                    <img class="card-img-top" src="https://i.ibb.co/3mpHkdD/reftab-logo.png" alt="Reftab">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Reftab - Assets management solution</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Protocoles réseau</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="VLAN">
                </div>
                <div class="card-body">
                    <p class="card-title">VLAN</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Routage inter-VLAN">
                </div>
                <div class="card-body">
                    <p class="card-title">Routage inter-VLAN</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Routage">
                </div>
                <div class="card-body">
                    <p class="card-title">Routage statique</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Routage">
                </div>
                <div class="card-body">
                    <p class="card-title">Routage dynamique - RIP</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Routage">
                </div>
                <div class="card-body">
                    <p class="card-title">Routage dynamique - OSPF</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/f1RYyV4/infra-reseau-logo.png" alt="Relais DHCP">
                </div>
                <div class="card-body">
                    <p class="card-title">Relais DHCPv4</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/Z61q23V/cisco-logo.jpg" alt="STP">
                </div>
                <div class="card-body">
                    <p class="card-title">Spanning Tree Protocol</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/Z61q23V/cisco-logo.jpg" alt="EtherChannel">
                </div>
                <div class="card-body">
                    <p class="card-title">EtherChannel</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/Z61q23V/cisco-logo.jpg" alt="QoS">
                </div>
                <div class="card-body">
                    <p class="card-title">Quality of Services</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Language système</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Language système Microsoft">
                    <img class="card-img-top" src="https://i.ibb.co/HCtjBmD/powershell.png" alt="Powershell">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Powershell</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Language système UNIX">
                    <img class="card-img-top" src="https://i.ibb.co/F0R6MF0/bash-logo.png" alt="Bash">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Bash</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Language système sur le matériel Cisco">
                    <img class="card-img-top" src="https://i.ibb.co/Z61q23V/cisco-logo.jpg" alt="Cisco iOS">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Cisco iOS</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Systèmes d'exploitation</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent card-img-top" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Windows 7, 10, 11 - Windows Server 2016, 2019, 2022">
                    <img class="card-img-top" src="https://i.ibb.co/r3N0hB7/w10.png" alt="Windows">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Windows</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <button type="button" class="btn btn-transparent" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Debian, Ubuntu, Kali Linux, RHEL, CentOS, Fedora">
                    <img class="card-img-top" src="https://i.ibb.co/TBGKrRF/logo-linux.png" alt="Linux">
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-title">Linux</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/sjRWYV6/android-logo.png" alt="Android">
                </div>
                <div class="card-body">
                    <p class="card-title">Android</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-center">
                <h5 class="card-title">Développement</h5>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/W3GZXrk/html.png" alt="HTML">
                </div>
                <div class="card-body">
                    <p class="card-title">HTML</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/72bHnjm/css-logo.png" alt="CSS">
                </div>
                <div class="card-body">
                    <p class="card-title">CSS</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/WVqg5Hq/javascript-logo.png" alt="JavaScript">
                </div>
                <div class="card-body">
                    <p class="card-title">JavaScript</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/DLPgZK0/php-logo.png" alt="PHP">
                </div>
                <div class="card-body">
                    <p class="card-title">PHP</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-deck">
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/nwWB3QC/c-logo.png" alt="C">
                </div>
                <div class="card-body">
                    <p class="card-title">Langage C</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/61qcG8B/arduino-logo.png" alt="Arduino">
                </div>
                <div class="card-body">
                    <p class="card-title">Arduino</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            <div class="card text-grey shadow p-3 mb-5 border-primary rounded">
                <div class="card-header">
                    <img class="card-img-top" src="https://i.ibb.co/18qw0yT/python-logo.png" alt="Python">
                </div>
                <div class="card-body">
                    <p class="card-title">Python</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/Enable_ToolTip-Popover.php'); ?>
</html>