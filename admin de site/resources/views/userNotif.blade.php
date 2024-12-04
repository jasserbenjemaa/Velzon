<?php

// Connexion à la base de données
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=project', 'debian-sys-maint', 'C7nTnogp2CMNOIem');

	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());

	}$bdd->query("SET NAMES UTF8");


    $req = $bdd->query("SELECT count(*) as abc FROM contacts where lire = 0");

    $data = $req->fetch();

    echo $data['abc'];
?>
