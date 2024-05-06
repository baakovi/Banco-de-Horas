<?php 

    $server = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'company';

    global $pdo;

    // Orientado a objetos com PDO
    try {
        $pdo = new PDO("mysql:dbname=".$database."; host=".$server, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
    // $sql = $pdo->query("SELECT * FROM funcionario");
    // $sql->execute();

    // echo $sql->rowCount();

?>