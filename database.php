<?php

	/* D�finition de constantes */
	/* L'Host pour se connecter, le nom de la database, l'utilisateur qui configure */
	define('HOST', 'fdb1034.awardspace.net');
	define('DB_NAME', '4124459_ytrec');
	define('USER', '4124459_ytrec');
	define('PASS','root123456789!!');

	/* Esssaie de se connecter. Si cela ne marche pas, r�cup�rer l'erreur. */
	/* PDOException > Erreur de connexion. On r�cup�re l'erreur dans la var e et on l'�crit */
	try {
		$db = new PDO("mysql:host="	. HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connection > OK ";
	} catch(PDOException $e) {
		echo $e;
	}