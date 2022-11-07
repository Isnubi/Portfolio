<!doctype html>
<html lang="fr">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/header.php');?>
    <body>
        <div id="filterbanner"></div>
        <div id="banner"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/navbar.php');?>
        <main class="container">
            <div class="row center">
                <div class="col-12">
                    <h1>Page d'accueil</h1>
                    <p>Bienvenue sur mon site !</p>
                </div>
                <br>
                <button class="btn"><a href="/pages/about.php">About me</a></button>
            </div>
        </main>
    </body>
    <article></article>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/footer.php');?>
</html>