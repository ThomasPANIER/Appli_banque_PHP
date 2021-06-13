
<?php

class AccountModel extends BddConnect {

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

    public function getAccounts(int $id) {

        $query = $this->getDb()->prepare(
            "SELECT * 
            FROM compte 
            WHERE id_client=:id_client"
            );
        $query->execute([
            "id_client" => $id
        ]);
        $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($accounts as $key => $account) {
            $accounts[$key] = new Account($account);
        }
        return $accounts;
    }

    public function getAccount($id, $id_client) {

        $query = $this->getDb()->prepare(
            "SELECT * 
            FROM compte
            WHERE id=:id
            AND id_client=:id_client"
        );
        $query->execute([
            "id" => $id,
            "id_client" => $id_client
        ]);
        $account = $query->fetch(PDO::FETCH_ASSOC);
        $account = new Account($account);
        return $account;
    }

    public function addAccount(Account $account) : bool {
        
        $query = $this->getDb()->prepare(
            "INSERT INTO compte(id_client, type_compte, nom, date_ouverture, solde)
            VALUES (:id_client, :type_compte, :nom, NOW(), :solde)"
            );
        //$userConnect = $_SESSION["user"];
        $result = $query->execute([
            "id_client" => $account->getId_client(),
            "type_compte" => $account->getType_compte(),
            "nom" => $account->getNom(),
            //"date_ouverture" =>$account->getDate_ouverture(),
            "solde" => $account->getSolde()
        ]);
        return $result;
    }

    public function deleteAccount($id) {

        $query = $this->getDb()->prepare("DELETE FROM compte WHERE id=:id");
        $query->execute(["id" => $id]);
        return $query;
    }

    
}