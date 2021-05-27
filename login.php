
<?php

    require "model/connexion.php";
    require "model/userModel.php";

    
    if(isset($_POST["email"]) && isset($_POST["mdp"])) {
        $user = getUserByEmail($db, $_POST["email"]);
        var_dump($user);
        if($user) {
            //if(password_verify($_POST["mdp"], $user["mdp"])) {
            if($_POST["mdp"] === $user["mdp"]) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
            }
            else {
                $error_message = "Identifiants invalides";
            }
        }
        if(($_POST["email"] === $user["email"] && $_POST["mdp"] === $user["mdp"])) {
            
                session_start();
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
        }
        else {
            $error_message = "Identifiants invalides";
        }

    }
    
?>



<?php 

    include "layer.php";
    include "layout/header.php";

?>

<h2>Accéder à votre espace</h2>

<form action="" method="post" class="w-75 mx-auto my-5">

    <?php if(isset($error_message)): ?>
        <div class="alert alert-danger">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <div>
        <label for="email" class="form-label">Votre mail d'utilisateur</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    
    <div>
        <label for="mdp" class="form-label">Votre mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control">
    </div>

    <div class="my-5 text-center">
        <input type="submit" name="connexion" class="btn btn-dark text-white w-25 form-control" value="Connexion">
    </div>

</form>

<?php include "layout/footer.php"; ?>