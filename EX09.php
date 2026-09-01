<?php 
$numeros = [1,3,6,5,8,6,10];
$soma = 0;
foreach($numeros as $numero){
    $soma += $numero;
}

echo "Vamos somar a seguinte lista de números: \n";
print_r($numeros);
echo "A soma de todos os números da lista resulta em: $soma";
?>