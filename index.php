
<?php 

    require "model/connexion.php";
    require "model/accountModel.php";

    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location:login.php");
        exit;
    }

    $accounts = getAccounts($db, $_SESSION["user"]["id"]);
    //$account = getAccount($db);

    require "view/indexView.php";

?>

