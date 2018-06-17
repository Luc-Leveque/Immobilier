<?php include("headerIMMO.php");

		if (isset($_POST['submit']))
			
	{			
				$login=$_POST['login'];
				$mdp=sha1($_POST['mdp']); // ajouter sha1 pour les mdp cryptée
				
				$requete = $bdd->query("SELECT * FROM user WHERE login ='".$login."' AND mdp = '".$mdp."'" );
				
				if($reponse =$requete->fetch())
			{
					$_SESSION["connecte"] = true;
					$_SESSION["lvl"]=$reponse['lvl'];
					$_SESSION['id'] = $reponse['id_u'];
					header("Location:index.php");
					
			}

				else
			{
				echo "mauvais identifiant";
			}
	}

?>
		<form method="post" action="#">
			login:<input type="login" name="login"></br>
			Mdp<input type="password" name="mdp"><br/>
			<input type="submit" name="submit">
			<a href="inscriptionIMMO.php">pas encore inscrit?</a>
		</form>

<?php include("footerIMMO.php");
test