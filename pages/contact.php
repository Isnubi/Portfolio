<!doctype html>
<html lang="fr">
<head>
    <?php $title = "Contact"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
				<div class="card-text">Vous pouvez aussi me contacter via cette adresse mail : 
					<a class="lien2" href="mailto:contact@louis-gambart.fr">contact@louis-gambart.fr</a>
				</div><br>
				
				<form id="contact" method="post" action="/public/assets/dist/php/form.php">
					<fieldset><legend>Vos coordonnées</legend>
						<div class="input-group mb-3 shadow">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Votre nom</span>
							</div>
							<label for="last_name"></label><input type="text" name="last_name" class="form-control"/>
						</div>
						<div class="input-group mb-3 shadow">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Votre prénom</span>
							</div>
							<label for="last_name"></label><input type="text" name="first_name" class="form-control"/>
						</div>
						<div class="input-group mb-3 shadow">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Votre email</span>
							</div>
							<label for="email"></label><input type="text" name="email" class="form-control"/>
						</div>
					</fieldset>
				 
					<fieldset><legend>Votre message :</legend>
						<div class="input-group mb-3 shadow">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Objet du message</span>
							</div>
							<label for="object"></label></label><input type="text" name="object" class="form-control"/>
						</div>
						<div class="input-group mb-3 ">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Votre message</span>
							</div>
							<label for="message"></label></label><textarea type="text" name="message" class="form-control" cols="30" rows="8"></textarea>
						</div>
					</fieldset>
					<div class="text-grey text-center"><input type="submit" name="submit" value="Envoyer votre message !" class="btn btn-primary" /></div>
                </form>
			</div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_without_class.php'); ?>
</body>
</html>