
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gestion immobilier </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo_app.png">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
            <form action="verification.php" method= "POST" id="wizard2">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="assets/images/nav-image.png" alt="DocGend">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Connexion</h3>
							</div>
							<p>Veuillez entrer vos informations</p>
							<!-- Message d'erreur si les champs sont vides -->
							<?php
								if(@$_GET['Empty']==true)  {
							?>
							<div style="color:red; margin-bottom:10px; margin-top:-15px; text-align:center;"><?php echo $_GET['Empty'];?></div>
							<?php 
							} 
							?>
							<!-- Message d'erreur si les informations sont incorrectes -->
							<?php
								if(@$_GET['Invalid']==true)  {
							?>
							<div style="color:red; margin-bottom:10px; margin-top:-15px; text-align:center;"><?php echo $_GET['Invalid'];?></div>
							<?php 
							} 
							?>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="email" placeholder="Email" class="form-control" name="email"  >
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder w-100" style="display:flex;" >
									<input type="password" placeholder="Mot de passe" id="myInput" class="form-control" name="mot_de_passe"  style="flex:1;">
									<span id="addon" onclick="myFunction()" class="fa fa-fw fa-eye field-icon"></span>
								</div>	
							</div>
							<div class="form-row">
								<div class="form-holder">
									<div class="label-forget">
										<label><a href="index.php" style="font-size:12px;">Mot de passe oublié?</a></label>
									</div>
								</div>
							</div>
							<div class="form-row" >
								<div class="form-holder w-100 label-btn" >
									<input type="submit" class="btn-submit" name="valider" value="Se connecter">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder w-100">
									<div class="label-forget text-center">
										<label>Vous n'êtes pas inscrit ?<a href="inscription.php" style="font-weight:bold;"> Créez un compte</a></label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="assets/js/jquery.steps.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			function myFunction() {
				var x = document.getElementById("myInput");
				if (x.type === "password") {
					x.type = "text";
					document.getElementById("addon").className="fa fa-fw fa-eye-slash field-icon";
				} else {
					x.type = "password";
					document.getElementById("addon").className="fa fa-fw fa-eye field-icon";
				}
				}
		</script>

</body>
</html>
