<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.

$inputArray = [5, 6, -4, 2, 3, 2, -23];

function adjacentElementsProduct($inputArray)
{
    $max_pair = [];
    
    for($i = 0, $a = count($inputArray); $i < $a - 1; $i ++)
    {
        $max_pair[] = $inputArray[$i] * $inputArray[$i+1];
    }
    
    return max($max_pair);
}

echo adjacentElementsProduct($inputArray);


?>