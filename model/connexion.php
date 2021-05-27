
<?php

    try {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8', 'root', '');
    }

    catch(Exception $error) {
        die($error->getMessage());
    }

?>