<?php
session_start();
require_once('./includes/database.php');
// recuperer l'id de l'utilisateur pour lequel on veut confirmer l'inscription
$userId = $_GET['id'];
// recuperer le token de l'utilisateur pour lequel on veut confirmer l'inscription
$token = $_GET['token'];

// requette pour recuperer l'utilisateur dans la base de données
$query = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$userId]);
$user = $query->fetch();

var_dump($user);
