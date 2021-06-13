
<?php 

require "model/bddConnect.php";
require "model/accountModel.php";
require "model/entity/account.php";
require "model/entity/user.php";

session_start();
if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
}

$userConnect = $_SESSION["user"];
$accountsModel = new AccountModel();
$accounts = $accountsModel->getAccounts($userConnect->getId());
//$account = $accountsModel->getAccount($_GET["id"], $userConnect->getId());
//var_dump($accounts);
require "view/indexView.php";

?>

