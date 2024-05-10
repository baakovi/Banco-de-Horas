<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $host = 'localhost';
    $dbname = 'empresa';
    $username = 'root';
    $password = 'root';
    $charset = 'utf8mb4';

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password, $options);
    }

    catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        
    }

    $funcionario_id = $_POST['funcionario_id'];
    $data = $_POST['data'];
    $entrada_um = $_POST['entrada_um'];
    $entrada_dois = $_POST['entrada_dois'];
    $saida_um = $_POST['saida_um'];
    $saida_dois = $_POST['saida_dois'];
    
    $sql = "INSERT INTO registro_horas(id_funcionario, data_ponto, entrada_1, entrada_2, saida_1, saida_2) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$funcionario_id, $data, $entrada_um, $entrada_dois, $saida_um, $saida_dois]);

    // INSERÇÃO HORAS
    $consulta = "SELECT * FROM registro_horas";
    
    session_regenerate_id();
    header('Location: ../insert_hours.php');

?>