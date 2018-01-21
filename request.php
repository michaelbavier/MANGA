<?php

include 'connexion.php';


	$phrase_sql = "SELECT * FROM action ";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	$action = $preparation->fetchAll( PDO::FETCH_ASSOC );


 ?>
