<?php
session_start();
require_once('./includes/database.php');
//   // 1Chiffres de 0 à 9
//   $chiffres = range(0, 9);
//        echo "<pre>";
//         print_r($chiffres);
//       echo "</pre>";  
//   // 2-Lettres minuscules de a à z
//   $minuscules = range('a', 'z');
//   echo "<pre>";
//   print_r($minuscules);
// echo "</pre>";
//   // 3-Lettres majuscules de A à Z
//   $majuscules = range('A', 'Z');
//   echo "<pre>";
//   print_r($majuscules);
// echo "</pre>";
  // 4-Combiner tous les éléments
//   $resultat = array_merge($chiffres, $minuscules, $majuscules);
  
//   // 5-Afficher le résultat
//   echo "<pre>";
//   print_r($resultat);
//   echo "</pre>";

/**
 * La fonction array_merge() en PHP a pour rôle de fusionner un ou plusieurs tableaux
 */
//   $resultat2 = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
//   echo "<pre>";
//   print_r($resultat2);
//   echo "</pre>";
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

    //Password ---------------------------
    if (empty($_POST['password']) ||
        !preg_match(
            "/[a-zA-Z0-9_]{8,}$/",
            $_POST['password']
        )) {
        $errors['password'] = "Le mot de passe doit contenir au moins 8 caractères";
    } else if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors['confirm_password'] = "Les mots de passe ne correspondent pas";
    }
    // INSERT INTO ------------------
    if (empty($errors)) {   
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        // $query->execute([
        //     'username' => $_POST['username'],
        //     'email' => $_POST['email'],
        //     'password' => $password
        // ]);
      
        $alphanum = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        $alphanumString = implode('', $alphanum); // 7-Transforme le tableau en string
        $token = str_repeat($alphanumString, 3); // Répète la chaîne 3 fois
        
        var_dump($token);
        
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