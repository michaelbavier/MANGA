<?php
    $bdd = new PDO("mysql:host=".$db_config['db_host'].";dbname= MANGA".$db_config['db_name'].";charset=utf8;",);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
