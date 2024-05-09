// Códigos descartados durante o projeto

    // CÓDIGO 1
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


    // CÓDIGO 2
    <?php // while($dice = $conn->fetch_array()) { ?>

        <tr class="info-table">
            <td><?php echo $dice['id']; ?></td>
            <td><?php echo $dice['nome']; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dice['data_nascimento'])); ?></td>
            <td><?php echo $dice['funcao']; ?></td>
        </tr>

    <?php // } ?>