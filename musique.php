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
    <title>Musiques - Le YT des Recollets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include './templates/header.php' ?>

    <section>
        <h2 class="an_section">
            Découvrez les meilleurs musiques !!
        </h2>
        <div class="gen_classic">
            <div class="pr_video">
                <iframe src="https://open.spotify.com/embed/track/1r9xUipOqoNwggBpENDsvJ?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
        </div>

        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/0pqnGHJpmpxLKifKRmU6WP?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/0TDLuuLlV54CkRRUOahJb4?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/5ovAmYzYLeEmOX6P3bmlzV?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6i0V12jOa3mr6uu4WYhUBr?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/3CRDbSIZ4r5MsZ0YwxuEkn?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/1Xi84slp6FryDSCbzq4UCD?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/5qaEfEh1AtSdrdrByCP7qR?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6Qn5zhYkTa37e91HC1D7lb?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/75MNhvTCCKsST3YqqUiU9r?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/2pPO9YecZimmuVQfIzfV6U?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6f3Slt0GbA2bPZlz0aIFXN?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/7tUTCcqkMCnC9qLqbQeI0T?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/50Td3qilgs8BLtv8mHyT1t?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6lOWoTqVnAWXchddtTH31W?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/0VjIjW4GlUZAMYd2vXMi3b?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/0J07ya7WC09FaQADutoBRZ?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/5PjdY0CKGZdEuoNab3yDmX?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6ft4hAq6yde8jPZY2i5zLr?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/6f3Slt0GbA2bPZlz0aIFXN?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/5knuzwU65gJK7IF5yJsuaW?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/2hrUO4drrO63i7FYbCLBl2?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/0lYBSQXN6rCTvUZvg9S0lU?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/1esZgaqm0YKN87CIP3orJ3?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/03aENfSuuy3VS0sbgH7u1D?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/47EiUVwUp4C9fGccaPuUCS?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/32OlwWuMpZ6b0aN2RZOeMS?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/1pjvlYOMIg1NhGQbM6iwrY?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
        <div class="video">
            <iframe src="https://open.spotify.com/embed/track/31OqWK8Lc6GnUbnLG3GqPX?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="player"></iframe>
        </div>
    </section>

    <?php include './templates/footer.php' ?>

</body>
</html>