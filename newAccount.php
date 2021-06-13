
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
$account = $userConnect->getId();
    //var_dump($account);

if(!empty($_POST) && isset($_POST["addAccount"])) {
    //$account = $_POST;
    
    $account = new Account($_POST);
    $accountModel->addAccount($account);
    //$account["id_client"] = $userConnect->getId();
    
    foreach($account as $key => $value) {
        $account[$key] = htmlspecialchars($value);
    
        if(empty($account["id_client"]) || !is_int($account["id_client"])) {
            $error = "Vous n'etes pas identifié";
        }
        if(empty($account["type_compte"])) {
            $error = "Veuillez choisir un type de compte";
        }
        if(empty($account["nom"])) {
            $error = "Veuillez rentrer un nom de compte";
        }
        if(empty($account["solde"]) || !is_int($account["solde"])) {
            $error = "Veuillez rentrer un montant valide";
        }
        //var_dump($account);
    }
}






include "view/newAccountView.php";

?>
