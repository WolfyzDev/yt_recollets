<?php 
    try 
    {
        $bdd = new PDO("mysql:host=fdb1034.awardspace.net;dbname=4124459_ytrec;charset=utf8", "4124459_ytrec", "root123456789!!");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
