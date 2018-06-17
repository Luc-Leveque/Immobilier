<?php include("headerIMMO.php");?>



	<div class="colonne3">
		<h1 class="centrer">Vous trouverez ici toutes les annonces sur les Maisons</h1>
<?php			$sql2 = "SELECT * FROM annonce WHERE id_c=2";

							$requete = $bdd->query($sql2);
			
			while($reponse = $requete->fetch())
				{
					echo "<ul class='centrer'><a href='a.php?id=".$reponse['id_a']."'><img src=".$reponse['p1']." class='petitjpg '> ";
					echo "<p>".$reponse['titre']."</a><br/>";
					echo $reponse['prix']."€<br/>";
					echo $reponse['nbpiece']." pièce(s)<br/></p></ul>";

				}
?>

	</div>