<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

function almostIncreasingSequence($sequence) 
{
    $c = 0;
    for($i=0; $i<count($sequence)-1; $i++) {
        if ($sequence[$i]>=$sequence[$i+1]) {
          $c++;
          }
        if ($i+2<count($sequence)&&$sequence[$i]>=$sequence[$i+2]) {
          $c++;
          }
        }
    return $c < 3;
}

echo "Exemplo :";
var_dump(almostIncreasingSequence([1, 3, 2, 1]));//false
var_dump(almostIncreasingSequence([1, 3, 2]));//true
echo "<hr>"."<hr>";

echo "Questão 5 (resposta) :";
var_dump(almostIncreasingSequence([3, 5, 67, 98, 3]));

?>