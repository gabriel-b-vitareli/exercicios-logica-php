<?php 
$dividendo = readline("Digite o dividendo: ");
$divisor = readline("Digite o disivor: ");

if ($dividendo % $divisor == 0){
    echo "\033[;32mEsses números são divisíveis.\033[m";
} else{
    echo "\033[;31mEsses números não são divisíveis.\033[m";
}
?>