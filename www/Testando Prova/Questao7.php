<?php

function commonCharacterCount($s1, $s2) 
{
$a1 = str_split($s1);
$a2 = str_split($s2);
$common = array_intersect($a1, $a2);

var_dump($a1, $a2);

return count($common);
}

echo "Exemplo :"."<hr>";
var_dump(commonCharacterCount("aabcc", "adcaa"));
echo "<hr>"."<hr>";

echo "Questão 7 (resultado) :";
var_dump(commonCharacterCount("zzzz", "zzzzzzz"));
echo "<hr>"."<hr>";

echo "Exemplos :"."<hr>";
var_dump(commonCharacterCount("abcd", "aad"));
echo "<hr>";

var_dump(commonCharacterCount("geeksforgeeks","platformforgeeks"));