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
    $saida_um = $_POST['saida_um'];
    $entrada_dois = $_POST['entrada_dois'];
    $saida_dois = $_POST['saida_dois'];

    $total = (strtotime($saida_um) - strtotime($entrada_um)) + (strtotime($saida_dois) - strtotime($entrada_dois));
    $hours = floor($total / 60 / 60);
    $minutes = round(($total - ($hours * 60 * 60)) / 60);
    $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
    $horas_totais = $hours . ':' . $minutes;
    
    $sql = "INSERT INTO registro_horas(id_funcionario, data_ponto, entrada_1, saida_1, entrada_2, saida_2, horas_totais) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$funcionario_id, $data, $entrada_um, $saida_um, $entrada_dois, $saida_dois, $horas_totais]);
    
    session_regenerate_id();
    header('Location: ../insert_hours.php');

?>