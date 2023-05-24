<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style.css">
            <title>Connexion</title>
        </head>
        <body>
        
        <?php include './header.php' ?>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary btn-block" style="color:white";>Connexion</button>
                </div>   

            </form>
         <p><a href="inscription.php">Inscription</a></p>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;

                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
 
            .form-group {
                    margin: 50px;
             }
             
             .form-submit, a{
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
                    
             .btn {
                     background: #636363;
                     border:none;
              }
        </style>
        
          <?php include '../templates/footer.php' ?>
        </body>
</html>