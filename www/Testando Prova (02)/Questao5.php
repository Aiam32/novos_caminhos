<?php

function almostIncreasingSequence($sequence) 
{
        for($erasedIndex = 0; $erasedIndex < count($sequence); $erasedIndex++) {
            $increasing = true;
            $last = 0;
            $start = 1;
            if(!$erasedIndex) {
                $last = 1;
                $start = 2;
            }
            for($j = $start; $j < count($sequence); $j++) {
                if($j === $erasedIndex) {
                    continue;
                }
                if($sequence[$j] <= $sequence[$last]) {
                    $increasing = false;
                    break;
                }
                $last = $j;
            }
            if($increasing) {
                return true;
            }
        }
        return false;
}

echo "Exemplo :";
var_dump(almostIncreasingSequence([1, 3, 2, 1]));//false
echo "<hr>";
var_dump(almostIncreasingSequence([1, 3, 2]));//true
echo "<hr>"."<hr>";

echo "Questão 5 (resposta) :";
var_dump(almostIncreasingSequence([3, 5, 67, 98, 3]));
echo "<hr>"."<hr>";

echo "Exemplos :";
var_dump(almostIncreasingSequence([2, 1, 2, 3]));
echo "<hr>";
var_dump(almostIncreasingSequence([1, 2, 3]));
echo "<hr>";
var_dump(almostIncreasingSequence([1, 2, 3, 0]));
echo "<hr>";
var_dump(almostIncreasingSequence([9, 1, 2, 3, 0]));
echo "<hr>";
var_dump(almostIncreasingSequence([1, 2, 9, 3, 4]));
echo "<hr>";
var_dump(almostIncreasingSequence([1, 2, 9, 0, 3, 4]));
echo "<hr>";
var_dump(almostIncreasingSequence([1, 2, 8, 9, 3, 4]));

?>