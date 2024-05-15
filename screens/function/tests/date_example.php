<?php

    // Start date
    $dateStart = '20/05/2024';
    $dateStart = implode('-', array_reverse(explode('/', substr($dateStart, 0, 10)))).substr($dateStart, 10);
    $dateStart = new DateTime($dateStart);

    // End date
    $dateEnd = '30/05/2024';
    $dateEnd = implode('-', array_reverse(explode('/', substr($dateEnd, 0, 10)))).substr($dateEnd, 10);
    $dateEnd = new DateTime($dateEnd);

    // Prints days according to the interval
    $dateRange = array();
    while($dateStart <= $dateEnd) {
        $dateRange[] = $dateStart->format('Y-m-d');
        $dateStart = $dateStart->modify('+1day');
    }

    var_dump($dateRange);

    // --------------------
    // Pequeno exercício que vi na internet: um cara vende seu carro por um acordo diversificado - no primeiro dia, a pessoa que quiser o carro paga R$0,01, e a cada dia que passa, o número dobra e a pessoa teria que pagar por 30 dias. No último dia, quanto a pessoa ia estar pagando pelo carro?
    $vlr = 0.01; // Valor do primeiro dia
    // Laço para contabilizar os 30 dias
    for ($i=1; $i<=30; $i++) {
        $valor = number_format($vlr, 2); // Formata o número com duas casas decimais
        echo "<br>";
        echo "Dia {$i} => {$valor}"; // Imprime o valor do dia.
        $vlr = 2*$vlr; // Calculo que dobra o valor do dia anterior
        // Resultado ==> No 30º, a pessoa iria estar pagando R$5,368,709.12
    }

    // --------------------
    echo "<pre>";
    // Printa informações sobre o servidor
    print_r($_SERVER);
    echo "</pre>";

    // --------------------
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');
    
    $semana = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );
    
    $mes_extenso = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Marco',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Nov' => 'Novembro',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Dec' => 'Dezembro'
    );
    
    // Printa o dia de hoje
    echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

?>