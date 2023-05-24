<?php include './templates/session.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png"/>

    <style>
    p {
    text-align: right;
    color: white;
    font-size: 20px;
    margin-right: 20px;
}
</style>
    
</head>
<body>
    <header>
        <h1>
            Le YT des Récollets
        </h1>
        <nav class="navheader">
            <ul>
                <li>
                    <a href="http://ytrec.atwebpages.com/index.php" class="btnav">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="http://ytrec.atwebpages.com/classics.php" class="btnav">
                        Classique
                    </a>
                </li>
                <li>
                    <a href="http://ytrec.atwebpages.com/musique.php" class="btnav">
                        Musique
                    </a>
                </li>
                <li>
                    <a href="http://ytrec.atwebpages.com/sessions/index.php" class="btnav">
                        Connexion / Inscription
                    </a>
                </li>  
                <p>Bonjour <?php echo $data['pseudo']; ?> !</p>
            </ul>
        </nav>
    </header>
</body>