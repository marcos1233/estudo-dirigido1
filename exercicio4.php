<?php

print "Digite o preço da mercadoria: ";
$mercadoria = (float)fgets(STDIN);
 
print "Digite o percentual de desconto: ";
$desconto = (float)fgets(STDIN);
 
$descontoreal = $desconto/100;
$valordesconto = $mercadoria*$descontoreal;
 
$novopreco = $mercadoria-$valordesconto;
 
print "\nO preço a pagar será de: $novopreco\nO valor de desconto foi de: $valordesconto";
