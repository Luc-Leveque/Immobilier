<?php include("headerPPE.php");
	
	if ($_SESSION['lvl']<2)
		header("Location:index.php");
	
	if(isset($_GET['id']))
	{
		$request = $bdd->query("DELETE FROM user WHERE id_u=".$_GET['id']);
	}
	
	$requete = $bdd->query("SELECT * FROM user WHERE lvl <2 ");
	
	echo "<ul>";
	
	while($reponse = $requete->fetch())
	{
		echo "<li>".$reponse['email']." <a href='membres.php?id=".$reponse['id_u']."'>X</a> 
		<a href='consulter.php?id=".$reponse['id_u']."'>consulter</a></li>";
	}
	echo "</ul>";
?>