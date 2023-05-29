<?php 
    session_start();
    require_once './sessions/config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:./sessions/inscription.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Le YT des Recollets</title>
    <link rel="stylesheet" href="style.css">
    <style>
            .linkac {  color : #3baea0;}
    /style>
</head>
<body>
    
    <?php include './templates/header.php' ?>
    
<section>
        <div class="boxs">
            <h2>
                Classiques
            </h2>
            <p>
                De grands classiques, dignes de vous !
            </p>
            <a href="http://ytrec.atwebpages.com/classics.php" class="linkac">
                Accéder à la page
            </a>
        </div>
        
        <div class="boxs">
            <h2>
                Musique
            </h2>
            <p>
                Ecouter les meilleurs musique du Web
            </p>
            <a href="http://ytrec.atwebpages.com/musique.php" class="linkac" id="content">
                Accéder à la page
            </a>
        </div>
        <div class="boxs">
            <h2>
                Espace membre
            </h2>
            <a href="http://ytrec.atwebpages.com/sessions/index.php" class="linkac">
                Se connecter / Créer un compte
            </a>
        </div>
    </section>
    
     <?php include './templates/footer.php' ?>
</body>
</html>

