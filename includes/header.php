<?php
// session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Manager Accounts Users</title>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white p-4">
        <div class="logo">
            <h2><a href="index.php" class="text-lg font-semibold">Compte utilisateur</a></h2>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <?php if (isset($_SESSION['auth'])) : ?>
                    <li><a id="gcu" href="logout.php" class="hover:text-gray-300">Se déconnecter</a></li>
                <?php else : ?>
                    <li><a href="register.php" class="hover:text-gray-300">S'inscrire</a></li>
                    <li><a href="login.php" class="hover:text-gray-300">Se connecter</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="p-4">
        <span>
            <?php if (isset($_SESSION['flash'])) : ?>
                <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
                    <div class="alert alert-<?= $type ?> bg-<?= $type ?>-100 border border-<?= $type ?>-400 text-<?= $type ?>-700 px-4 py-3 rounded relative" role="alert">
                        <?= $message ?>
                    </div>
                <?php endforeach; ?>
                <?php unset($_SESSION['flash']) ?>
            <?php endif; ?>
        </span>
    </main>
</body>

</html>
