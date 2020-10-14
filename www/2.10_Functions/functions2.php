<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalnado com funções');

require __DIR__ . '/functions.php';
PHPClassSession("functions", __LINE__);

// Exemplo 1
var_dump(functionName("IFTO", "NOVOS CAMINHOS", "PROGRAMADOR WEB"));
var_dump(functionName("Yuri", "Fernando", "Ugo Maia"));

// Exemplo 2
var_dump(calcIMC(70, 1.77));
var_dump(calcIMC(90, 2));
var_dump(calcIMC(100, 2));