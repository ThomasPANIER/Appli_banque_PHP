
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

    function viewAccount(PDO $db, $id, $id_client) {
        $query = $db->prepare(
            "SELECT type_compte as 'Type', 
            nom as Nom, 
            date_ouverture as 'Date d\'ouvertue', 
            solde as Solde, 
            commentaire as Commentaire 
            FROM compte
            WHERE id=:id
            AND id_client=:id_client"
        
        );
        $query->execute([
            "id" => $id,
            "id_client" => $id_client
        ]);
        $account = $query->fetch(PDO::FETCH_ASSOC);
        return $account;  
    }

?>
