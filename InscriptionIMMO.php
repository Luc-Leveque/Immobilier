<?php include("headerIMMO.php"); ?>

<?php
if(isset($_POST['submit']))
	{
		$login =$_POST['login'];
		$email = $_POST['email'];
		$mdp = sha1($_POST['mdp']);
		
		$requete = $bdd->query("INSERT INTO user(login,mdp,email,lvl) VALUES('".$login."','".$mdp."','".$email."',1)");
		$_SESSION['connecte'] = true;
		$_SESSION['id'] = $bdd->lastInsertId();
		$_SESSION['lvl'] = 1;
		mail($email,"Inscription","Bienvenue");
		header("Location:index.php");
	}
?>


<form method="post" action="">
			Email:<input type="email" name="email">
			login:<input type="login" name="login">
			Mdp<input type="password" name="mdp">
			<input type="submit" name="submit">
</form>

<?php include("footerIMMO.php"); ?>

					