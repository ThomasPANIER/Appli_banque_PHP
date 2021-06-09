
<?php

    session_start();
    if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
    }
    require "model/connexion.php";

    if(!empty($_POST)) {
        $account = $_POST;

        foreach($account as $key => $value) {
            $account[$key] = htmlspecialchars($value);
        }
        if(empty($account["name"])) {
            $error = "Veuillez rentrer un nom de compte";
        }
        if(empty($account["amount"]) || !is_int($account["amount"])) {
            $error = "Veuillez rentrer un montant valide";
        }
    }

    include "view/newAccountView.php";

?>
