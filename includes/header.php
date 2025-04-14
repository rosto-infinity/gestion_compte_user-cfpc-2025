<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>manager  Accounts users</title>
</head>

<body>
    <header>
        <div class="logo">
            <h4><a style="color:white" href="index.php">Compte utilisateur</a></h4>
        </div>
        <nav>
            <ul>
                 <li><a id="gcu" href="logout.php">Se deconnecter</a></li>
                <li><a href="register.php">S'inscrire</a></li>
                <li><a href="login.php">Se connecter</a></li>
            </ul>
        </nav>

    </header>
    <span>
        <h3>Gestion des comptes utilisateurs</h3>
    </span>
   <?php
   if(isset($_SESSION['flash'])){
         foreach($_SESSION['flash'] as $type => $message){
              echo '<div class="alert alert-'.$type.'">'.$message.'</div>';
         }
         // Display the message and remove it from the session
        unset($_SESSION['flash']);
   }

   ?>