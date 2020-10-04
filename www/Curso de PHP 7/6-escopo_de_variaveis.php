<?php
// ESCOPO GLOBAL 
$nome = "Ugo Maia";
$a = 1;
$b = 3;
$c = 7;
function exibeNome() {
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";
////////////////////////////

function exibeCidade() {
    // Escopo Global
    global $cidade;
    $cidade = "Coimbra";
}
exibeCidade();
echo $cidade;
echo "<hr>";
////////////////////////////

function soma() {
    echo  $GLOBALS['a'] + $GLOBALS ['b'] + $GLOBALS ['c'];
}
soma();