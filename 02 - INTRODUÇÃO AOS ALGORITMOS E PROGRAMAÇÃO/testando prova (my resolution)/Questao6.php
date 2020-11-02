<?php

function allLongestStrings(array $inputArray) {
    if(!$inputArray)
        return [];

    $maxLength = max(array_map('strlen', $inputArray));

    return array_filter($inputArray, function($v) use($maxLength) {     
            return strlen($v) == $maxLength; });
}

echo '<pre>';

echo "Exemplo :"."<br>"."<br>";
$inputArray = ["aba", "aa", "ad", "vcd", "aba"];
print_r(allLongestStrings($inputArray)); 
echo "<hr>"."<hr>";

echo "Questão 6 (resposta) :"."<br>"."<br>";
$inputArray = ["a", "abc", "cbd", "zzzzzz", "a", "abcdef", "asasa", "aaaaaa"];
print_r(allLongestStrings($inputArray)); 
echo "<hr>"."<hr>";

echo "Exemplos :"."<br>"."<br>";
$inputArray = ["aa", "bbbb", "cc", "yyyy", "j"];
print_r(allLongestStrings($inputArray)); 
echo "<hr>";

$inputArray = ["aaaaa", "ss", "yyyyy", "u", "ooooo"];
print_r(allLongestStrings($inputArray));

?>