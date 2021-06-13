
<?php

abstract class BddConnect {

    const HOST  = "localhost";
    const NAME = "banque_php";
    const LOGIN = "root";
    const PASSWORD = "";

    static public function bddConnect() {
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            //$db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8', 'root', '');
            $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD);
            return $db;
        }

        catch(Exception $error) {
            die($error->getMessage());
        }
    }
}