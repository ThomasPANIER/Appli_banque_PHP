
<?php

require "model/bddConnect.php";
require "model/entity/user.php";
require "model/userModel.php";

$userModel = new UserModel();

    if(isset($_POST["email"]) && isset($_POST["mdp"])) {
        $user = $userModel->getUserByEmail($_POST["email"]);
        if($user) {
            //if(password_verify($_POST["mdp"], $user->getMdp())) {
            if($_POST["mdp"] === $user->getMdp()) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
            }
            else {
                $error_message = "Identifiants invalides";
            }
        }
    }

include "view/loginView.php";
    
?>
