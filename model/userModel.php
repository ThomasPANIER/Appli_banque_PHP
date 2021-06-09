
<?php 

    require "connexion.php";


    function getUserByEmail(PDO $db, string $email) {
        $query = $db->prepare("SELECT * FROM client WHERE email=:email");
        $query->execute([
            "email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;        
    }

    function getUserInfos(PDO $db, int $id) {
        $query = $db->prepare("SELECT * FROM client WHERE id=:id_client");
        $query->execute([
            "id_client" => $id
        ]);
        $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $accounts;
    }

?>