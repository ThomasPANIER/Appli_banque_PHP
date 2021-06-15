
<?php

require "model/bddConnect.php";
require "model/accountModel.php";
require "model/entity/account.php";
require "model/userModel.php";
require "model/entity/user.php";

session_start();
if(!isset($_SESSION["user"])) {
header("Location:login.php");
exit;
}

$accountModel = new AccountModel();
$userConnect = $_SESSION["user"];


if(!empty($_POST) && isset($_POST["addAccount"])) {
    //$account = $_POST;
    
    //$account["id_client"] = $userConnect->getId();
    
    foreach($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
    }
    if(empty($_POST["id_client"]) || !is_numeric($_POST["id_client"])) {
        $error = "Vous n'etes pas identifié";
    }
    if(empty($_POST["type_compte"])) {
        $error = "Veuillez choisir un type de compte";
    }
    if(empty($_POST["nom"])) {
        $error = "Veuillez rentrer un nom de compte";
    }
    if(empty($_POST["solde"]) || !is_numeric($_POST["solde"])) {
        $error = "Veuillez rentrer un montant valide";
    }
    //var_dump($account);
    
    if(!isset($error)) {
        $account = new Account($_POST);

        if($accountModel->addAccount($account)) {
            header("Location:index.php");
            exit;
        }
    }

}






include "view/newAccountView.php";

?>
