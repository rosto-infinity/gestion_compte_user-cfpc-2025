<?php
session_start();
require_once('./includes/database.php');

// 22-recuperer l'id de l'utilisateur pour lequel on veut confirmer l'inscription
$userId = $_GET['id'];
// 21-recuperer le token de l'utilisateur pour lequel on veut confirmer l'inscription
$token = $_GET['token'];

// 20-requette pour recuperer l'utilisateur dans la base de données
$query = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$userId]);
$user = $query->fetch();
// http://localhost:1080/email/ABxj3Xky/localhost/php-2025/cours-php/gestion_compte_user-cfpc-2025/confirm?id=24&token=gYx3ImnREvAz8enZOyWj5E8z3tpVQDmrq6gr1FyVqI3TYcIojs10ZYX1aEFqY4u7bfw51D8ptM6xyMQGhZzYXGA4sMVCUDMiqXVZ
// echo "<pre>";
// print_r($user);
// echo "</pre>";
if($user && $user['confirmation_token'] == $token){
    // 19-Update the user in the database to set the confirmation token to NULL
    $query = $pdo->prepare("UPDATE users SET confirmation_token = NULL,  confirmed_at = NOW() WHERE id = ?");
    $query->execute([$userId]);
    $_SESSION['flash']['success'] = "Votre compte a été confirmé avec succès !";
    // 17-Set the session variable to indicate that the user is logged in
    $_SESSION['auth']= $user; 
    // 18--Redirect to the login page with a success message
    header('Location: login.php');  
}else{
    $_SESSION['flash']['error'] = "Ce compte n'existe pas ou le lien de confirmation est invalide.";
    header('Location: login.php');  
}


