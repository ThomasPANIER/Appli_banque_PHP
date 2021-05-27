
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

?>