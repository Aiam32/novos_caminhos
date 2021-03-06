<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

function isLucky($n) 
{
    return array_sum(str_split(substr($n, 0, strlen($n) / 2))) 
    == array_sum(str_split(substr($n, strlen($n) / 2)));
}

echo "Exemplo :";
var_dump(isLucky(1230));
echo "<hr>";
var_dump(isLucky(239017));
echo "<hr>"."<hr>";

echo "Questao 8 (resultado) :"; 
var_dump(isLucky(261534));

?>