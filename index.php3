<?php

$valor = 1200;
$juros = $valor*0.12;
$valor_total = $valor + $juros;
$parcelas = $valor_total/12;
echo $valor_total."<br>";
echo $parcelas;
"<br>"

$valor = 20.000;
$idade = $valor/365;
echo number_format($idade);
if ($idade>=18){
    echo "Maior de idade";
}else{
    echo "Menor de idade";
}

?>