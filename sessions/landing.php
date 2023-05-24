<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
  //si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
       header('Location:./inscription.php');
       die();
   }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href='../style.css'>
   
    <style>
     a{
    text-decoration: none;
    border:0;
    background: #636363;
    display: block;
    margin: 25px auto;
    text-align: center;
    border: 2px solid #3baea0;
    padding: 10px 20px;
    outline: none;
    color: #dfd3c3;
    border-radius: 24px;
    transition: 0.75s;
    cursor: pointer;
    width : 200px;
    
    a:hover{
    text-decoration: none;
    border:0;
    background: rgb(141, 131, 131);
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #f0f2eb;
    padding: 13px 26px;
    outline: none;
    color: #f0ece2;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
    
   </style>
  </head>
  <body>
        <div class="container">
                <div class="text-center">
                        <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a
                </div>
            </div>
        </div>   
  
  
        <a href="../index.php"> Retourner sur la page d'acceuil</a>
  </body>
</html>
