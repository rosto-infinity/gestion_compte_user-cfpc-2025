<?php
session_start();
require_once('./includes/database.php');
if (isset($_POST)) {
    $errors = [];
    //   echo "<pre>";
    //     print_r($_POST);
    //   echo "</pre>";  

    //Username ---------------------------
    if (empty($_POST['username']) ||
        !preg_match(
            "/^[a-zA-Z0-9_]{3,20}$/",
            $_POST['username']
        )) {

        $errors['username'] = "Veuillez entrer un nom d'utilisateur valide (3-20 caractères)";
    } else {
        $query = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $query->execute([$_POST['username']]);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $errors['username'] = "Ce nom d'utilisateur existe déjà";
        }
    }

    //Email ---------------------------

    if (empty($_POST['email']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Veuillez entrer une adresse email valide";
    } else {
        $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$_POST['email']]);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $errors['email'] = "Cet email existe déjà";
        }
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
                    value="">

            </div>

            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="rostodev@gmail.com" name="email"
                    value="">
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