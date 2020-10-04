<?php
/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */
echo "<hr>";
echo "<hr>";
$nomes = array("Ugo", "Felipe", "Maria", "Jóse");

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";
//////////////////////////////////////////////
echo in_array("Maria", $nomes);
echo "<br>";
if(in_array("Maria", $nomes)):
    echo "Existe no array";
else:
    echo "Não exite no array";
endif;
echo "<br>";
if(in_array("Hadis", $nomes)):
    echo "Existe no array";
else:
    echo "Não exite no array";
endif;
echo "<hr>";
//////////////////////////////////////////////
$nomes = array("Primo;"=>"Ugo;", "Vizinho;"=>"Felipe;", "Mãe;"=>"Maria;", "Pai"=>"Jóse");
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";
//////////////////////////////////////////////
$values = array_values($nomes);
print_r($values);
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$carros = array("Camaro;", "Uno;", "Gol;");
$motos = array("Pop100;","50cc;","cb1000");

$veículos = array_merge($carros, $motos);
print_r($veículos);
echo "<hr>";
//////////////////////////////////////////////
$carros = array("Camaro;", "Uno;", "Gol");
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
//////////////////////////////////////////////
$carros = array("Camaro;", "Uno;", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$frutas = array("Uva;", "Laranja;", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga;", "Acerola;", "Morango;");
print_r($frutas);
echo "<hr>";
//////////////////////////////////////////////
$frutas = array("Uva;", "Laranja;", "Maçã");
print_r($frutas);
echo "<br>";
array_push($frutas, "Manga;", "Acerola;", "Morango;");
print_r($frutas);
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$keys = array("Vice", "Campeão", "Terceiro");
$values = array("Vasco;", "Flamengo;", "Botafogo");
$resultado = array_combine($keys, $values); 
print_r($resultado);
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$soma = array(5,7.8,6,5.5,10,7.2);
echo array_sum($soma);
echo "<br>";
echo "ou";
echo "<br>";
$total = array_sum($soma);
echo $total;
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$data = "03;/10;/2020";

$novaData = explode('/', $data);

print_r($novaData);
echo "<hr>";
//////////////////////////////////////////////
$frase = "Meu nome não é Jhonny";
$array = explode(" ",$frase);
print_r($array);
echo "<hr>";
echo "<hr>";
//////////////////////////////////////////////

$nomes = array("Ugo", "Carlos", "Antônio", "Thalita");
$string = implode(", ", $nomes);
echo $string; 