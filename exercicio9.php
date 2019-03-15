<?php

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

#lata
    $lata_rend = 108; #18*6
    $lata_preco = 80;
#a  compra apenas de latas de 18 litros
    $qtd_latas = ceil($area / $lata_rend);
    $latas_custo = $qtd_latas * $lata_preco;
     print "\nSerão necessárias $qtd_latas lata(s) no valor de R$$latas_custo\n";

<?php

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

#galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;
#a  compra apenas de galaoes de 3,6 litors
    $qtd_galao = ceil($area / $galao_rend);
    $galao_custo = $qtd_galao * $galao_preco;
     print "\nSerão necessárias $qtd_galao lata(s) no valor de R$$galao_custo\n";

<?php
//Exercicio1

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);
    
#lata
    $lata_rend = 108; #18*6
    $lata_preco = 80;
#galao
    $galao_rend = 21.6; #3.6*6
    $galao_preco = 25;    
#a  compra apenas de latas de 18 litros
    $qtd_latas = ceil($area / $lata_rend);
    $latas_custo = $qtd_latas * $lata_preco;
print "\nSerão necessárias $qtd_latas lata(s) no valor de R$$latas_custo\n";
    $qtd_latas = 0;
    $qtd_galoes= 0;
    $qtd_latas = (int) ($area / $lata_rend);
    $faltou_latas = $area % $lata_rend;
    $qts_galoes = ceil($faltou_latas / $galao_rend);

    print "$faltou_latas - $qtd_latas\n";

