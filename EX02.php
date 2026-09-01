<?php 
$primeiroNum = readline("Digite o primeiro número: ");
$segundoNum = readline("\nDigite o segundo número: ");

if ($primeiroNum > $segundoNum){
    echo "$primeiroNum é maior que $segundoNum.";
} elseif($segundoNum > $primeiroNum){
    echo "$segundoNum é maior que $primeiroNum.";
} else{
    echo "$primeiroNum é igual a $segundoNum.";
}

?>