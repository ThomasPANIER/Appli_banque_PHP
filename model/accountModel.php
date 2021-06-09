
<?php

    require "connexion.php";

    function getAccounts(PDO $db, int $id) {
        $query = $db->prepare("SELECT id, type_compte, nom, date_ouverture, solde FROM compte WHERE id_client=:id_client");
        $query->execute([
            "id_client" => $id
        ]);
        $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $accounts;
    }

    // function getAccount($db) {
    //     $query = $db->query("CREATE TEMPORARY TABLE tmp_compte LIKE compte");
    //     $query = $db->query("SELECT type_compte as 'Type', 
    //                         nom as Nom, 
    //                         solde as Solde 
    //                         FROM compte");
    //     $account = $query->fetchAll(PDO::FETCH_ASSOC);
    //     return $account;
    // }

    function viewAccount(PDO $db, $id) {
        $query = $db->prepare(
            "SELECT type_compte as 'Type', 
            nom as Nom, 
            date_ouverture as 'Date d\'ouvertue', 
            solde as Solde, 
            commentaire as Commentaire 
            FROM compte
            WHERE id=:id"
        
            );
        $query->execute([
            "id" => $id
        ]);
        $account = $query->fetch(PDO::FETCH_ASSOC);
        return $account;  
    }

?>
