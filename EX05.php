<?php 
$nota = readline("Digite sua nota: ");

if ($nota >= 7){
    echo "\033[32mVocê passou na média com sua nota $nota.\033[m";
} else{
    echo "\033[31mVocê foi reprovado com sua nota $nota.\033[m";
}

?>