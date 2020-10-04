<?php
// Constantes
define("Nome", "Ugo Maia");
define("Idade", 32);
define("Altura", 1.77);
define("Solteiro", true);
define("Times", ['vasco', 'flamengo', 'santos']);

var_dump(Nome,Idade,Altura,Solteiro);
echo "<br>";
/////////////////////////////////
echo 'Meu nome é ' .Nome. ', minha idade é ' .Idade. ', mimha altura ' .Altura. '.';
echo "<hr>";
/////////////////////////////////
var_dump(Times);
echo Times[1];
echo "<hr>";
/////////////////////////////////

function exibeNome() {
    echo Nome;
}
exibeNome();