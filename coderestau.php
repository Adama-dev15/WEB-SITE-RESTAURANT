<?php
	try
	{
		$connexion = new PDO('mysql:host=localhost;port=3308;dbname=bdrestaut;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
   {
		die('erreur : '.$e -> getMessage() );
   }
	$requete = 'insert into bdrestaut.smsClient(nomCli, emailCli, nbreCli, dateresvCli, teleCli, dateSms) values(?, ?, ?, ?, ?, NOW())';
	$requete = $connexion->prepare($requete);
	$requete->execute([$_POST['nom'], $_POST['email'], $_POST['nbre'], $_POST['date'], $_POST['cel']]);
?>