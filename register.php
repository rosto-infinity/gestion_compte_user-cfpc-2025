<?php
session_start();
require_once('./includes/database.php');
if($_POST){

    $errrors =[];
//   echo "<pre>";
//     print_r($_POST);
//   echo "</pre>";  

//Username ---------------------------
if(empty($_POST['username'] || 
        !preg_match("/^[a-zA-Z0-9_]{3,20}$/",
        $_POST['username']))){

    $errors['username'] = "Veuillez entrer un nom d'utilisateur valide (3-20 caractères)";{

        var_dump($errors['username']);
}
}

?>
<?php require_once './includes/header.php'; ?>


<div class="content">
    <div class="container">
        <div class="header">
            <h2>S'inscrire</h2>
        </div>
     
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