

<?php

class OperationModel extends BddConnect {

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

    // public function getOperation($id, $id_client) {

    //     $query = $this->getDb()->prepare(
    //         "SELECT * 
    //         FROM operation
    //         RIGHT JOIN compte
    //             ON operation.id_compte = compte.id
    //             AND operation.id_client = compte.id_client
    //         WHERE compte.id=:id
    //         AND compte.id_client=:id_client"
    //     );
    //     $query->execute([
    //         "id" => $id,
    //         "id_client" => $id_client
    //     ]);
    //     $operation = $query->fetch(PDO::FETCH_ASSOC);
    //     $operation = new Operation($operation);
    //     return $operation;
    // }


    public function getOperation($id_compte) {

        $query = $this->getDb()->prepare(
            "SELECT * 
            FROM operation
            WHERE id_compte=:id
            ORDER BY id DESC"
        );
        $query->execute([
            "id" => $id_compte
        ]);
        $operation = $query->fetch(PDO::FETCH_ASSOC);
        if ($operation) {
            $operation = new Operation($operation);
        }
        return $operation;
        
    }




}