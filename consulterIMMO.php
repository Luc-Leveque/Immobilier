<?php include("headerIMMO.php");

$requete = $bdd->query("SELECT * FROM user WHERE id_u = ".$_GET['id']);
$reponse = $requete->fetch();

echo "Email:".$reponse['email']."<br/>";
echo "Niveau d'autorisation:".$reponse['lvl']"<br/>";
echo "Mdp:".$reponse['mdp']."<br/>";

include("footerIMMO.php")
