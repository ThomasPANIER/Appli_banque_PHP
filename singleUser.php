
<?php 

require "model/bddConnect.php";
require "model/userModel.php";
require "model/entity/user.php";

session_start();
if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
}

$userConnect = $_SESSION["user"];

$userModel = new UserModel();
$infos = $userModel->getUserInfos($userConnect->getId());

//$infos = getUserInfos($_SESSION["user"]["id"]);

require "view/singleUserView.php";

?>


