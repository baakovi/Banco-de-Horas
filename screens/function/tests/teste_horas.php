<?php 

    // Teste de cálculo do total de horas trabalhadas.

    $dt_entrada1 = '08:00';
    $dt_saida1 = '12:00';
    $dt_entrada2 = '13:00';
    $dt_saida2 = '15:00';

    // Faz o cálculo das horas
    $total = (strtotime($dt_saida1) - strtotime($dt_entrada1)) + (strtotime($dt_saida2) - strtotime($dt_entrada2));
    
    // Encontra as horas trabalhadas
    $hours = floor($total / 60 / 60);
    // Encontra os minutos trabalhados
    $minutes = round(($total - ($hours * 60 * 60)) / 60);
    $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
    // Exibe no formato "hora:minuto"
    echo $hours . ':' . $minutes;
?>