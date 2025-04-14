<?php
session_start();
require_once('./includes/database.php');
// recuperer l'id de l'utilisateur pour lequel on veut confirmer l'inscription
$userId = $_GET['id'];
