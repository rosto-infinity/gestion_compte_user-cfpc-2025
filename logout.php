<?php
session_start();
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous êtes deconnectez avec sucess";
header("Location: login.php");