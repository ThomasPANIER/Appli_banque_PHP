
<?php

class UserModel extends BddConnect {

    private PDO $_db;

    function __construct()
    {
        $this->setDb(BddConnect::bddConnect());
    }

    public function setDb(PDO $connection) {
        $this->_db = $connection;
    }

    public function getDb() : PDO {
        return $this->_db;
    }

    public function getUserByEmail(string $email) {
        $query = $this->getDb()->prepare("SELECT * FROM client WHERE email=:email");
        $query->execute([
            "email" => $email
        ]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $result = new User($data);
        return $result;        
    }

    public function getUserInfos(int $id) {
        $query = $this->getDb()->prepare("SELECT * FROM client WHERE id=:id_client");
        $query->execute([
            "id_client" => $id
        ]);
        $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
        // foreach($accounts as $key => $account) {
        //     $accounts[$key] = new User($account);
        // }
        return $accounts;
    }
}
