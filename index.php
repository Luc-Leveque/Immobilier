<?php include("headerIMMO.php");?>

<nav>

	<div class="colonne1 centrer">
		<h1>Bienvenu dans l'immofacile !!!</h1>
		<p>Comment bien acheter en immobilier ? Avec immofacile, vous allez enfin pouvoir connaitre l'évolution des prix des annonces immobilières. </p>
	</div>

	<div class="margehaut"></div>
	<div class="gauche">
	<form action="#" method="post" class="formu">
			1 piece<input type="checkbox" name="1">
			2 pieces<input type="checkbox" name="2">
			3 pieces<input type="checkbox" name="3">
			4 pieces<input type="checkbox" name="4">
			<input type="submit" name="criteres"/>
	</form>

	<form action="#" method="post" >
		<input type="text" name="requete" size="10">
		<input type="submit" name="recherche" value="Ok">
	</form>
	
	<form action="#" method="post">
		<input type="submit" name="prixhaut" value="prix max" >
		<input type="submit" name="prixbas" value="prix min" >	
	</form>
	
	</div>

	<div class="colonne3">
		<?php
		
			if(isset($_POST['criteres']))
			{
				$sql = "SELECT * FROM annonce WHERE ";
				$i = 0;
				if(isset($_POST['1']))
				{
					$sql .= "nbpiece = 1 ";
					$i++;
				}
				if(isset($_POST['2']))
				{
					if($i > 0)
					{
						$sql .= "OR nbpiece = 2 ";
					}
					else
						$sql .= "nbpiece = 2 ";
					$i++;
				}
				if(isset($_POST['3']))
				{
					if($i > 0)
						$sql .= "OR nbpiece = 3 ";
					else
						$sql .= "nbpiece = 3 ";
					$i++;
				}
				if(isset($_POST['4']))
				{
					if($i > 0)
						$sql .= "OR nbpiece = 4 ";
					else
						$sql .= "nbpiece = 4 ";
						$i++;
				}
				if ($i==0)
				{
					$sql .= "nbpiece=1 or nbpiece=2 or nbpiece=3 or nbpiece=4";
				}
			
				
			$requete = $bdd->query($sql);
			
			while($reponse = $requete->fetch())
				{
					echo "<ul class='centrer'><a href='a.php?id=".$reponse['id_a']."'><img src=".$reponse['p1']." class='petitjpg '> ";
					echo "<p>".$reponse['titre']."</a><br/>";
					echo $reponse['prix']."€<br/>";
					echo $reponse['nbpiece']." pièce(s)<br/></p></ul>";
				}
			}
			
			
			
			elseif(isset($_POST['requete']))
			{
				$recherche = $_POST['requete'];
				$requete = $bdd->query("SELECT * 
				FROM annonce
				WHERE titre LIKE '%".$recherche."%'");
			
				while($reponse = $requete->fetch())
				{
					echo "<ul class='centrer'><a href='a.php?id=".$reponse['id_a']."'><img src=".$reponse['p1']." class='petitjpg '> ";
					echo "<p>".$reponse['titre']."</a><br/>";
					echo $reponse['prix']."€<br/>";
					echo $reponse['nbpiece']." pièce(s)<br/></p></ul>";
				}
			}
			
			
		
			elseif(isset($_POST['prixhaut']))
			{
				$recherche = $_POST['prixhaut'];
				$requete = $bdd->query("SELECT * 
				FROM annonce ORDER BY prix DESC");
			
				while($reponse = $requete->fetch())
				{
					echo "<ul class='centrer'><a href='a.php?id=".$reponse['id_a']."'><img src=".$reponse['p1']." class='petitjpg '> ";
					echo "<p>".$reponse['titre']."</a><br/>";
					echo $reponse['prix']."€<br/>";
					echo $reponse['nbpiece']." pièce(s)<br/></p></ul>";
				}
			}			
			
				
			
			elseif(isset($_POST['prixbas']))
			{
				$recherche = $_POST['prixbas'];
				$requete = $bdd->query("SELECT * 
				FROM annonce ORDER BY prix ");
			
				while($reponse = $requete->fetch())
				{
					echo "<ul class='centrer'><a href='a.php?id=".$reponse['id_a']."'><img src=".$reponse['p1']." class='petitjpg '> ";
					echo "<p>".$reponse['titre']."</a><br/>";
					echo $reponse['prix']."€<br/>";
					echo $reponse['nbpiece']." pièce(s)<br/></p></ul>";
				}
			}
			
		else
			{
			echo "<p class='centrer margehaut'>Acheter un bien immobilier ou le vendre,
			que ce soit un premier appartement, un terrain ou une maison, c'est en général un projet de vie. Pour concrétiser ce projet,
			mon objectif est de vous accompagner au cours des nombreuses démarches à effectuer. Nous allons cerner vos besoins,
			les évaluer pour y répondre, dans une relation d'échange et d'écoute. C'est votre projet de vie, c'est mon quotidien,
			nous pouvons choisir d'en faire une étape agréable pour chacun !</p></br>";					//Mettre une description accueil
			echo "<p class='centrer'>
					Bonne Recherche.</p>";
			echo "<p class='centrer'><img class='pluspetit' src='img/fotoacc.jpg' /></p>";
			
			}
					
	

		?>
	</div>
</nav>
<?php include("footerIMMO.php");?>