<?php 

    $server = 'localhost';
    $user = 'root';
    $password = 'Pimpinella06!';
    $database = 'company';

    // Orientado a objetos com PDO
    $pdo = new PDO("mysql:dbname=".$database."; host=".$server, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->query("SELECT * FROM funcionario");
    $sql->execute();

    echo $sql->rowCount();

?>