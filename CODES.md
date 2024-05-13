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


     // CÓDIGO 3
         <!-- <main>
        <div class="main-cadastro">

            <form class="forms-cadastro" action="" method="POST">

                <div class="forms-div">

                    <div>
                        <h3 class="text-cadastro">Cadastro de Banco de Horas</h3>
                    </div>

                    <div class="values">

                        <div>
                            <label for="func">Insira o nome do Novo Funcionário</label>
                            <input type="text" name="func" id="func" class="input-cadastro" required>
                        </div>

                        <div>
                            <label for="nasc">Insira a data de nascimento</label>
                            <input type="date" name="nasc" id="nasc" class="input-cadastro" required>
                        </div>

                        <div>
                            <label for="function">Insira a função deste funcionário</label>
                            <input type="text" name="function" id="function" class="input-cadastro" required>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Aceite os termos e condições.
                            </label>
                            
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>


                    <div>
                        <input type="submit" name="submit" class="btn btn-success new-button" value="Cadastrar novo funcionário">
                    </div>

                </div>

            </form>

        </div>
    </main> -->


    // CÓDIGO 4
    // $horas_trabalhadas = $_POST['horas_trabalhadas'];
    // $descricao = $_POST['descricao'];
    <!-- <label for="horas_trabalhadas">Horas Trabalhadas:</label>
                    <input type="text" id="horas_trabalhadas" name="horas_trabalhadas" class="input-cadastro" required>
                    <br>

                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" class="input-cadastro" required>
                    <br> -->


    // CÓDIGO 5
    <?php
    $input = "Alien";
    echo str_pad($input, 10);                      // produces "Alien     "
    echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
    echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
    echo str_pad($input,  6, "___");               // produces "Alien_"
    echo str_pad($input,  3, "*");                 // produces "Alien"
    ?>