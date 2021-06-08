
<?php 

    require "model/connexion.php";
    require "model/userModel.php";
    

    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location:login.php");
        exit;
    }

    $infos = getUserInfos($db, $_SESSION["user"]["id"]);

    require "view/singleUserView.php";
?>


