
<?php

    require "model/connexion.php";
    require "model/accountModel.php";

    

    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $account = viewAccount($db, $_GET["id"]);
        

    }
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayer de revenir plus tard";
    }

    require "view/singleAccountView.php";
?>
