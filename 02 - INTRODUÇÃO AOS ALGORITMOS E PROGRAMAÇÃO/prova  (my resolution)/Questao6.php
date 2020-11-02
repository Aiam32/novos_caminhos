<?php

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

function allLongestStrings($inputArray) 
{
    
    $strLengths = array_map('strlen', $inputArray);
    $keys = array_keys($strLengths, max($strLengths));
    $allLongestStrings = array_values(array_intersect_key($inputArray, array_flip($keys)));
    
    return $allLongestStrings;
}

echo '<pre>';

echo "Exemplo :"."<br>"."<br>";
$inputArray = ["aba", "aa", "ad", "vcd", "aba"];
print_r(allLongestStrings($inputArray)); 
echo "<hr>";

echo "Questão 6 (resposta) :"."<br>"."<br>";
$inputArray = ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"];
print_r(allLongestStrings($inputArray));

?>