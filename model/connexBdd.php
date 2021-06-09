
<?php

abstract class Bdd {

    const HOST  = "localhost";
    const NAME = "banque_php";
    const LOGIN = "root";
    const PASSWORD = "";

    public static function bdd() {
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME . ';charset=utf8,' . self::LOGIN .',' . self::PASSWORD);
            return $db;
        }

        catch(Exception $error) {
            die($error->getMessage());
        }
    }
}