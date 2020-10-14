<?php

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

//example to get the palindrome of a number using built in function
function checkPalindrome($inputString) 
{
$reverse = strrev($inputString);
if($reverse == $inputString) {
return true;
            }
else
{
return false;
            }
}
$inputString = "zzzazzazz";
$result = checkPalindrome($inputString);
if($result == TRUE) {
echo $inputString.'; É um palíndromo';
                                    }
else
{
echo $inputString.'; Não é um palíndromo';
                                        }

?>