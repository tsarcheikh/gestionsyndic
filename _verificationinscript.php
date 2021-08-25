<?php 
	session_start() ;
	require_once('connexion.php');

	@$email = htmlentities(trim($_POST['email']));
	@$mot_de_passe1 = htmlentities(trim($_POST['password']));
	@$mot_de_passe2 = htmlentities(trim($_POST['confirm_password']));

	if(isset($_POST['valider']))
	{
		if(empty($email) || empty($mot_de_passe1) || empty($mot_de_passe2))
		{
			header("location:inscription.php?Empty= Erreur. Veuillez remplir les champs vides.");
		}
		else
		{
			if($mot_de_passe1 == $mot_de_passe2)
			{
				# Vérifier si l'email n'existe pas déjà dans la table
                $reqSQL = "SELECT * from user where email = '$email' " ;
                $selectSQL = mysqli_query($cnx , $reqSQL) or die(mysqli_error($cnx));
                $trouve = mysqli_num_rows( $selectSQL) ;

				if ($trouve == 0)
				{
					$mot_de_passe = sha1($mot_de_passe1) ;
					$requete="INSERT INTO user(email,mot_de_passe) VALUES ( \"$email\", \"$mot_de_passe1\" )";
					$resultat=mysqli_query($cnx,$requete);

					if($resultat)
					{
						$_SESSION['email']=$email;
						header("location:save_registration.php");
					}
					else
					{
						header("location:inscription.php?Invalid= Erreur. Cet utilisateur est déja inscrit.");
					}
				}
				else
				{
					header("location:inscription.php?Invalid= Erreur. Cet utilisateur est déja inscrit.");
				}
				
			}
			else 
			{
				header("location:inscription.php?Invalid= Erreur. Les mots de passe ne sont pas identiques.");
			}
			
		}
	}
	else
	{
		echo 'Not Working now guys';
	}
?>