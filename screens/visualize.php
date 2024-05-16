<?php

use function PHPSTORM_META\type;

    session_start();

    include '../conn/connection.php';

    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
        exit;
    }

    if (isset($_POST['PesqEntreData'])) {
        if (!empty($_POST['PesqEntreData']) && !empty($_POST['data1']) && !empty($_POST['data2'])) {
            $data_inicial = $_POST['data1'];
            $data_final = $_POST['data2'];
    
            session_regenerate_id();

            $consulta = $connection->prepare("SELECT * FROM registro_horas WHERE data_ponto BETWEEN ? AND ? ORDER BY data_ponto");
            // $consulta = "SELECT * FROM registro_horas WHERE data_ponto BETWEEN '$data_inicial' AND '$data_final' ORDER BY data_ponto";

            $consulta->bind_param("ss", $data_inicial, $data_final);
            $consulta->execute();

            $conn = $consulta->get_result();
            // $conn = $connection->query($consulta) or die($connection->error);
        }

        elseif (empty($_POST['data1']) && empty($_POST['data2'])) {
            $error = 'Insira uma data em ambos.';
        }

        elseif (empty($_POST['data1'])) {
            $error = "Insira uma data de início.";
        }

        else {
            $error = "Insira uma data final.";
        }
    }

?>

<!doctype html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../assets/icon/briefcase-solid.svg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>Visualizar Funcionários</title>

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/visualize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script>
        function reloadPage(){
            window.location.assign('visualize.php');
        } 
    </script>
</head>

<body>

    <?php include './header.php' ?>

    <main>

        <div class="table-div">

            <form action="" method="POST">

                <div class="input-div pb-4">

                    <label for="data1" class="input-div-text">Início:</label>
                    <input type="date" id="data1" name="data1" class="input-div-data">
                    <label for="data2" class="input-div-text">Fim:</label>
                    <input type="date" id="data2" name="data2" class="input-div-data">
                    <input type="submit" value="Pesquisar" name="PesqEntreData" class="btn btn-dark">
                    <input type="button" onclick="reloadPage()" class="btn btn-dark" value="Recarregar">
                    <?php echo "<p class='error-text'>{$error}</p>"; ?>

                </div>
        
                <table class="table-all mb-5">

                    <tr class="title-table text-center">
                        <td>ID do Funcionário</td>
                        <td>Data do Ponto</td>
                        <td>Primeira Entrada</td>
                        <td>Primeira Saída</td>
                        <td>Segunda Entrada</td>
                        <td>Segunda Saída</td>
                        <td>Horas Trabalhadas</td>
                    </tr>

                    <?php while($dice = $conn->fetch_array()) { ?>

                    <tr class="info-table">
                        <td><?= $dice['id_funcionario']; ?></td>
                        <td class="error-text"><?= date("d/m/Y", strtotime($dice['data_ponto'])); ?></td>
                        <td><?= $dice['entrada_1']; ?></td>
                        <td><?= $dice['saida_1']; ?></td>
                        <td><?= $dice['entrada_2'] ?></td>
                        <td><?= $dice['saida_2'] ?></td>
                        <td><?= $dice['horas_totais'] ?></td>
                    </tr>

                    <?php } ?>

                </table>

            </form>

        </div>

        </p>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>