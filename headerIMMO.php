<html>
	<?php session_start();//connexion bdd	
		
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8","root","");
	
	}
		catch(Exeption $e)
	{
		die("erreur de connection");
	}
	?>
	
<body>
	<head>
		<title>PPE3</title>
		<link rel="stylesheet" href="style.css"/>
		<meta charset="utf8"/>
		<link href="zoombox.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="zoombox.js"></script>
		
	</head>
	
	<div class="central">
		<div class="haut">
			<img src="logo.png" class="image2"/>
		
		</div>	
		
		<nav class="menu2">
				<a href="index.php">Acceuil</a>
				<a href="appartement.php">Appartement</a>
				<a href="maison.php">Maison</a>
				<?php if(isset($_SESSION['connecte']))
				{
					echo"<a href='logoutIMMO.php'>Logout</a>";
				}
				else
				{
					echo"<a href='loginIMMO.php'>Login</a>";
				}
				?>
				
				
		</nav>
	