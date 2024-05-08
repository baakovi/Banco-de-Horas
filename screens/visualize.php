<!-- Lógica para visualizar o banco de horas de cada funcionário -->

<?php

    session_start();

    include '../conn/connection.php';

    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
        exit;
    }

    $visual = "SELECT * FROM banco_de_horas";
    $conn = $connection->query($visual) or die ($connection->error);

    // Cálculo das horas
    $total = (strtotime($conn['saida_1']) - strtotime($conn['entrada_1'])) + (strtotime($conn['saida_2']) - strtotime($conn['entrada_2']));

    // Encontra as horas trabalhadas
    // $hours = floor();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include './header.php' ?>

    <main>
        <p class="text-center p-5"><?php echo "Em produção..." ?></p>

        <p class="text-center"><?php
            $hoje = new DateTime('now');
            echo "Hoje é dia " . $hoje->format('d/m/Y H:i');
        ?></p>


        <p class="text-center"><?php

        $entrada = new DateTime('09:00');
        $saida = new DateTime('18:00');
        $intervalo = $saida->diff($entrada);
        print_r($intervalo);
        ?></p>

        <p>

            <?php 
                $timezone = new DateTimeZone('America/Sao_Paulo');
                $agora = new DateTime('now', $timezone);
                
                // print_r(DateTimeZone::listIdentifiers());

                $umDia = new DateInterval('P1D'); // Intervalo de 1 dia
                // Com DateTime:
                $hoje = new DateTime();
                echo $hoje->format('d/m'); // Saída 20/03
                echo "<br>";
                $hoje->add($umDia); // Altera o valor de $hoje
                echo $hoje->format('d/m'); // Saída 21/03
                echo "<br>";

                // Com DateTimeImmutable
                $hoje = new DateTimeImmutable();
                echo $hoje->format('d/m'); // Saída 20/03
                echo "<br>";
                $amanha = $hoje->add($umDia); // Não altera o valor de $hoje
                echo $hoje->format('d/m'); // Saída 20/03
                echo "<br>";
                echo $amanha->format('d/m'); // Saída 21/03
                echo "<br>";
            ?>

        </p>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>