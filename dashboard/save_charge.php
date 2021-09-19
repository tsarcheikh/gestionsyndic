<?php 
	session_start() ;
	require_once('../connexion.php');

	@$nom = htmlentities(trim($_POST['nom']));
	@$type = htmlentities(trim($_POST['type']));

	if(isset($_POST['valider']))
	{
		if(empty($nom))
		{
			header("location:charges.php?Empty= Erreur. Veuillez saisir le nom de la charge.");
		}
		else
		{
			$requete="INSERT INTO charge(nom,type_charge) VALUES ( \"$nom\", \"$type\" )";
			$resultat=mysqli_query($cnx,$requete);

			if($resultat)
			{
				header("location:charges.php");
			
			}
			else
			{
				header("location:charges.php?Invalid= Erreur. Votre nouvelle charge n'a pas été ajoutée.");
			}
							
		}
	}
	else
	{
		echo 'Not Working now guys';
	}
?>