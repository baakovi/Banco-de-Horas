<?php
    // Conexão com o banco de dados

    $server = 'localhost';
    $user = 'root';
    $password = 'Pimpinella06!';
    $database = 'company';

    $connection = mysqli_connect($server, $user, $password, $database);

    $sql = mysqli_query($connection, "SELECT * FROM funcionario");

    echo "Existem " . mysqli_num_rows($sql) . " linha(s) na tabela funcionário.";

    // if(mysqli_connect_errno()) {
    //     die('Falha na conexão: ' .mysqli_connect_error());
    // }
?>