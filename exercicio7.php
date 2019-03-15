<?php

print "digite quantos km foram percorridos:";
$kms=(float)fgets(STDIN);

print "digite quantos dias o carro foi alugado:";
$dias=(int) fgets(STDIN);

$preco=(60*$dias)+(0.15*$kms);

print "você tem que pagar $preco Reais \n";
