
<?php

    require "model/connexion.php";

    if(!empty($_POST)) {
        $user = $_POST;

        foreach($user as $key => $value) {
            $user[$key] = htmlspecialchars($value);
        }
        if(empty($user["email"])) {
            $error = "Veuillez rentrer un email valide";
        }
        if(empty($user["mdp"])) {
            $error = "Veuillez rentrer un mot de passe";
        }
    }

    require "view/newUserView.php";
?>
