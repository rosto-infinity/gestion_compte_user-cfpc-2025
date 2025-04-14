<?php
session_start();
require_once('./includes/database.php');

// recuperer l'id de l'utilisateur pour lequel on veut confirmer l'inscription
$userId = $_GET['id'];
// recuperer le token de l'utilisateur pour lequel on veut confirmer l'inscription
$token = $_GET['token'];

// 20-requette pour recuperer l'utilisateur dans la base de données
$query = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$userId]);
$user = $query->fetch();
// http://localhost:1080/email/ABxj3Xky/localhost/php-2025/cours-php/gestion_compte_user-cfpc-2025/confirm?id=24&token=gYx3ImnREvAz8enZOyWj5E8z3tpVQDmrq6gr1FyVqI3TYcIojs10ZYX1aEFqY4u7bfw51D8ptM6xyMQGhZzYXGA4sMVCUDMiqXVZ
echo "<pre>";
print_r($user);
echo "</pre>";

