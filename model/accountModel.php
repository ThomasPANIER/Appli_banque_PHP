
<?php

    require "connexion.php";
    

    function getAccount(PDO $db) {
        $query = $db->query("SELECT * FROM compte WHERE id_client=1");
        $account = $query->fetchAll(PDO::FETCH_ASSOC);
        return $account;  
    }

?>