<?php
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
echo "<hr>"."<hr>";

echo "Exemplos :";
var_dump(isLucky(1230));
echo "<hr>";
var_dump(isLucky(239017));
echo "<hr>";
var_dump(isLucky(2590178));
echo "<hr>";
var_dump(isLucky(1590175));

?>