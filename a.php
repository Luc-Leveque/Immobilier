<?php include("headerIMMO.php"); ?>

<div class="colonne3">
<?php
			$id_a = $_GET['id'];
			$t='connectez vous pour contacté le vendeur';
			
			
			$requete = $bdd->query("SELECT * FROM annonce WHERE id_a=$id_a") ;
	
			while($reponse = $requete->fetch())
			{
				if( isset ($_SESSION['connecte']))
				{
					echo"<h2>".$reponse['titre']."</h2>";
					echo "<p>".$reponse['description']."<p>";
					echo "<a class='zoombox zgallery1' href=".$reponse['p1']."><img src=".$reponse['p1']." class='image '></a> ";
					echo "<a class='zoombox zgallery1' href=".$reponse['p2']."><img src=".$reponse['p2']." class='image3 '></a> ";
					echo "<a class='zoombox zgallery1' href=".$reponse['p3']."><img src=".$reponse['p3']." class='image4 '></a> ";
					echo																	//ici communiquer avec bdd pour pouvoir commenter 
					
					"<form method='post' action='#'>																	
					
					<textarea name='texte' id='ckeditor' ></textarea>
					<input type='submit' name='submit'>
					</form>
					
					<script src='http://cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
					<script> CKEDITOR.replace('ckeditor'); </script>";
					
					if(isset($_POST['submit']) )
						{
							$texte=$_POST['texte'];
							$requete = $bdd->query("INSERT INTO commentaire (post) VALUES('".$texte."')");
							
						}
									
					
				
				}
		
				else
				{
					echo"<h2>".$reponse['titre']."</h2>";
					echo "<p>".$reponse['description']."<p>";
					echo "<img src=".$reponse['p1']." class='image '> ";
					echo "<img src=".$reponse['p2']." class='image3 '> ";
					echo "<img src=".$reponse['p3']." class='image4 '> ";
					echo "<p class='bas'>connectez vous pour contacté le vendeur.</p>";

					
				}
			}

 
?>

	


</div>

<?php include("footerIMMO.php");?>