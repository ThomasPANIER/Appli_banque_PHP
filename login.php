
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

    include "view/loginView.php";
    
?>
