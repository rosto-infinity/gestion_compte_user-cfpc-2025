<?php
session_start();
require_once('./includes/database.php');
require_once('./includes/functions.php');

// $chiffres = range(0, 9); // 1-Crée un tableau contenant les chiffres de 0 à 9
// $minuscules = range('a', 'z'); // 2-Crée un tableau contenant les lettres minuscules de a à z
// $majuscules = range('A', 'Z'); // 3-Crée un tableau contenant les lettres majuscules de A à Z
// $token=generateToken(100);
// echo '<pre>';
// print_r($token);
// echo '</pre>';
// die();

// echo '<pre>';
// print_r($minuscules);
// echo '</pre>';

// echo '<pre>';
// print_r($majuscules);   
// echo '</pre>';
if (isset($_POST)) {
    $errors = [];

    // -24-Username Validation
    if (empty($_POST['username']) || !preg_match("/^[a-zA-Z0-9_]{3,20}$/", $_POST['username'])) {
        $errors['username'] = "Veuillez entrer un nom d'utilisateur valide (3-20 caractères)";
    } else {
        $query = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $query->execute([$_POST['username']]);
        if ($query->fetch(PDO::FETCH_ASSOC)) {
            $errors['username'] = "Ce nom d'utilisateur existe déjà";
            
        }
    }

    // 26-Email Validation
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Veuillez entrer une adresse email valide";
    } else {
        $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$_POST['email']]);
        if ($query->fetch(PDO::FETCH_ASSOC)) {
            $errors['email'] = "Cet email existe déjà";
        }
    }

    // 27-Password Validation
    if (empty($_POST['password']) || !preg_match("/[a-zA-Z0-9_]{2,}$/", $_POST['password'])) {
        $errors['password'] = "Le mot de passe doit contenir au moins 2 caractères";
    } elseif ($_POST['password'] !== $_POST['confirm_password']) {
        $errors['confirm_password'] = "Les mots de passe ne correspondent pas";
    }

    // 27-Insert into Database
    if (empty($errors)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      
        // 28-Appelle la fonction generateToken pour générer un token aléatoire de 100 caractères
        $token=generateToken(100);
        $query = $pdo->prepare("INSERT INTO users (username, email, password, confirmation_token) VALUES (:username, :email, :password,:confirmation_token)");
        
        // 1-Exécution de la requête avec paramètres nommés
        $query->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'confirmation_token' => $token
        ]);

        $userId=$pdo->lastInsertId();
      
        $mail =$_POST['email'];
        $subject ="Confirmation du compte";
        $link ="http://localhost/php-2025/cours-php/gestion_compte_user-cfpc-2025/confirm?id=$userId&token=$token";

        $message = "Afin de confirmer votre compte, merci de cliquer sur ce lien : 
        <a href='$link'>Confirmer mon compte</a>";
    
        // 29-Envoi de l'e-mail en utilisant le format HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($mail, $subject, $message, $headers);

        // 30-Envoi d'un message de succès vers la page de connexion
        $_SESSION['flash']['success'] = "Un email de confirmation a été envoyé à $mail. Veuillez vérifier votre boîte de réception afin de confirmer votre compte.";
        header('Location: login.php');
        exit();
    
    }
}
?>
<?php require_once './includes/header.php'; ?>


<div class="content">
    <div class="container">
        <div class="header">
            <h2>S'inscrire</h2>
        </div>
        <?php
if (!empty($errors)) {
    echo '<div style="color:white; text-align: center; background-color:#ff6c6c;padding:2px 7px; margin-bottom:10px; font-size:23px;">' . reset($errors) . '</div>';
}
?>
        <form action="" class="form" id="form" method="post" enctype="multipart/form-data">
            <div class="form-control">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" placeholder="rostodev" name="username" autocomplete="off"
                    value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                    

            </div>

            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="rostodev@gmail.com" name="email"
                    value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"">
            </div>

            <div class="form-control">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">

            </div>

            <div class="form-control">
                <label for="confirm_password">Confirmation du mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password">

            </div>


            <button type="submit"> S'inscrire</button>

        </form>

    </div>
</div>
<?php
require_once './includes/footer.php';
?>