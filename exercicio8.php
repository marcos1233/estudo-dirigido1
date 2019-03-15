<?php

print "Quantidade de cigarros fumados por dia: ";
$Cigarros_fumados = fgets(STDIN);

print "Quantidades de dias que você fumou: ";
$Dias_fumados = fgets(STDIN);

    $Minutos_por_dia = $Cigarros_fumados*10;
    $Dias_perdidos = $Dias_fumados*$Minutos_por_dia;
    $Dias_perdidos = round($Dias_perdidos/1440);

print "Você perdeu $Dias_perdidos dias de vida";
