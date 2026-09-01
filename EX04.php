<?php 
$temperatura = readline("Digite a temperatura atual em graus celsius: ");
if ($temperatura > 27){
    echo "\033[31mEstá quente.\033[m";
} elseif($temperatura < 15){
    echo "\033[34mEstá frio.\033[m";
} else{
    echo "\033[32mEstá agradável.\033[m";
}
?>