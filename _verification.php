<?php 
	session_start() ;
	require_once('connexion.php');

	@$email = htmlentities(trim($_POST['email'])) ;
	@$mot_de_passe = htmlentities(trim($_POST['mot_de_passe'])) ;
	
	if(isset($_POST['valider']))
	{
		if(empty($email) || empty($mot_de_passe))
		{
			header("location:index.php?Empty= Erreur. Veuillez remplir les champs vides.");
		}
		else
		{
			$requete="SELECT * FROM user WHERE email='".$email."' AND mot_de_passe='".$mot_de_passe."'";
			$resultat=mysqli_query($cnx,$requete);

			if(mysqli_fetch_assoc($resultat))
			{
				$_SESSION['email']=$email;
				header("location:dashboard/");
			}
			else
			{
				header("location:index.php?Invalid= Erreur. Veuillez entrer l'email ou le mot de passe correct.");
			}
		}
	}
	else
	{
		echo 'Not Working now guys';
	}
?>