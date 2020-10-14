<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

function commonCharacterCount($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $c = 0;
    
    foreach($s1 as $key => $letter) {
        $key2 = array_search($letter, $s2);
        
        if($key2 !== false) {
            unset($s2[$key2]);
            $c++;
        }
    }
    
    return $c;
}

echo "Exemplo :"."<hr>";
var_dump(commonCharacterCount("aabcc", "adcaa"));
echo "<hr>"."<hr>";

echo "Questão 7 (resultado) :";
var_dump(commonCharacterCount("zzzz", "zzzzzzz"));