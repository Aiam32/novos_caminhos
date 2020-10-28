<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requesição de Arquivos');

/*
*
*/
PHPClassSession('include, include_once', __LINE__);

// include "file.php"; 
// echo "<p>CONTINUE</p>";

// include __DIR__ . "/header.php";

include __DIR__ . "/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile-> name = "Ugo";
$profile-> company = "IFTO";
$profile-> email = "fernandes.ugo@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

var_dump(include_once __DIR__ . "/header.php");

$profile = new stdClass();
$profile-> name = "Carlos";
$profile-> company = "IFTO";
$profile-> email = "carlos.ifto@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

PHPClassSession('require, require_once', __LINE__);

// require "file.php"; 
// echo "<p>CONTINUE</p>";