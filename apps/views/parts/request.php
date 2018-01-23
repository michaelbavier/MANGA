<?php

include 'connexion.php';

	if ($_GET['categorie'] == 'action') {
		$table_sql = 'action';
	}
	elseif ($_GET['categorie'] == 'aventure') {
		$table_sql = 'aventure';
	}

	$phrase_sql = "SELECT * FROM $table_sql ";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	$action = $preparation->fetchAll( PDO::FETCH_ASSOC );


 ?>
