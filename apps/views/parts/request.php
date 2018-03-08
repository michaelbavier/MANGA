<!-- <?php

include 'connexion.php';

	if ($_GET['categorie'] == 'action') {
		$table_sql = 'action';
	}
	elseif ($_GET['categorie'] == 'aventure') {
		$table_sql = 'aventure';
	}
	elseif ($_GET['categorie'] == 'romance') {
		$table_sql = 'romance';
	}
	elseif ($_GET['categorie'] == 'sport') {
		$table_sql = 'sport';
	}
	elseif ($_GET['categorie'] == 'fantastique') {
		$table_sql = 'fantastique';
	}
	elseif ($_GET['categorie'] == 'sicenceFiction') {
		$table_sql = 'sicenceFiction';
	}
	elseif ($_GET['categorie'] == 'policier') {
		$table_sql = 'policier';
	}
	elseif ($_GET['categorie'] == 'mangaCelebre') {
		$table_sql = 'mangaCelebre';
	}

	$phrase_sql = "SELECT * FROM $table_sql ";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	$action = $preparation->fetchAll( PDO::FETCH_ASSOC );


 ?> -->
