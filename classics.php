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
    <title>Classiques - Le YT des Recollets</title>
    <link rel="stylesheet" href="./classics.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    <?php include './templates/header.php' ?>
    
    <section>
        <h2 class="an_section">
            Découvrez les meilleurs classiques du Web
        </h2>

            <div class="video">
                <iframe src="https://www.youtube.com/embed/LKDv0FeKEVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
            </div>

        <div class="video">
            <iframe  src="https://www.youtube.com/embed/YJifdN6N0Bg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe  src="https://www.youtube.com/embed/btaFN3RxXBo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
        </div>
        <div class="video">
                <iframe src="https://www.youtube.com/embed/yYg8UAnEckw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/SHkqSfQcyw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe  src="https://www.youtube.com/embed/xKykFl0cNb4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/oXwNwVMsRi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="player" allowfullscreen></iframe>
        </div>
    </section>
    
    
    <?php include './templates/footer.php' ?>
    
    
</body>
</html>