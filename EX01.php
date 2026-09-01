<?php 
$idade = readline("Digite sua idade: ");

if ($idade < 18){
    echo "\033[;31mVocê é menor de idade.\033[m";
} elseif ($idade >= 18 and $idade < 60){
    echo "\033[;32mVocê é um adulto.\033[m";
} else {
    echo "\033[;34mVocê é um idoso.\033[m";
}
?>