<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gestion Syndic - Votre Gestionnaire de Syndicats </title>
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
            <form action="verificationinscript.php" method="POST" id="wizard2">
				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="assets/images/nav-image2.png" alt="Gestion Syndic">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Inscription</h3>
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
									<input type="email" id="email" placeholder="Email" class="form-control" name="email">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="password" id="password1 "placeholder="Mot de passe" class="form-control" name="password">
								</div>
							</div>
                            <div class="form-row">
								<div class="form-holder w-100">
									<input type="password" id="password2 "placeholder="Confirmation mot de passe" class="form-control" name="confirm_password">
								</div>
							</div>
							<div class="form-row" >
								<div class="form-holder w-100 label-btn" >
									<input type="submit" class="btn-submit" name="valider" value="Cr??er compte">
								</div>
							</div>
							<div class="label-account text-center">
                                <label>
                                    J'ai d??j?? un compte?
                                    <a href="index.php">Me connecter</a>
                                </label>
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
		<!-- Template created and distributed by Colorlib -->
</body>
</html>
