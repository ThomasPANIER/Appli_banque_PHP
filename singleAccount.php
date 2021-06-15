
<?php

require "model/bddConnect.php";
require "model/accountModel.php";
require "model/entity/account.php";
require "model/userModel.php";
require "model/entity/user.php";
require "model/operationModel.php";
require "model/entity/operation.php";



session_start();
if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
}

$userConnect = $_SESSION["user"];

$accountModel = new AccountModel();

$operationModel = new OperationModel();

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $operation = $operationModel->getOperation($_GET["id"], $userConnect->getId());
    $account = $accountModel->getAccount($_GET["id"], $userConnect->getId());
    //var_dump($account);
    if(!$account) {
        //throw new Exception("On ne regarde pas le compte des autres");
        $error = "On ne regarde pas le compte des autres";
    }

}
else {
    //throw new Exception("Nous ne parvenons pas à récupérer votre compte, essayer de revenir plus tard");
    $error = "Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard";
}



// if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
//     $operation = $operationModel->getOperation($_GET["id"], $userConnect->getId());
    
//     if(!$operation) {
//         //throw new Exception("On ne regarde pas le compte des autres");
//         $error = "On ne regarde pas le compte des autres";
//     }

// }
// else {
//     //throw new Exception("Nous ne parvenons pas à récupérer certaines informations, essayez de revenir plus tard");
//     $error = "Nous ne parvenons pas à récupérer certaines informations, essayez de revenir plus tard";
// }

if(isset($_POST['confirm'])) {
    $account = $accountModel->deleteAccount($_GET["id"]);
    //echo '<meta http-equiv="refresh" content="0;index.php"/>';
    if($account) {
        header("Location: index.php");
        exit;
    }
}
    

require "view/singleAccountView.php";

?>
