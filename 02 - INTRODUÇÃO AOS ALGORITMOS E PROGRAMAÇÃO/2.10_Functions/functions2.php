<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalnado com funções');

require __DIR__ . '/functions.php';
PHPClassSession("functions", __LINE__);
// Exemplo 1
var_dump(functionName("IFTO", "NOVOS CAMINHOS", "PROGRAMADOR WEB"));
var_dump(functionName("Yuri", "Fernando", "Ugo Maia"));

// Exemplo 2
//var_dump(calcIMC(70, 1.77));
//var_dump(calcIMC(90, 2));
//var_dump(calcIMC(100, 2));

PHPClassSession("global access", __LINE__);
// Exemplo 3
$weight = 91;
$height = 1.90;
var_dump(calcIMC_Global());

PHPClassSession("static arguments", __LINE__);
// Exemplo 4
$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);
var_dump($pay);

PHPClassSession("dynamic arguments", __LINE__);
// Exemplo 5
var_dump(myTeam());
var_dump(myTeam("Ugo"));
var_dump(myTeam("Ugo", "João"));
var_dump(myTeam("Ugo", "João", "Fernanda"));