<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"
// Para inputString = "foo(bar)baz(blim)", a saída deve ser "foorabbazmilb"

function reverseInParentheses($inputString)
{

    if (empty($inputString) || $inputString == '()')
    {
        return '';
    }
    else if (stripos($inputString, '(')  !== false)
    {
        return reverseInParentheses(reverse($inputString));
    }
    else
    {
        return $inputString;
    }
}

function reverse($inputString)
{
    return preg_replace_callback('/\(([^()]*)\)/i', function ($match)
    {
        return strrev($match[1]);
        },
        $inputString);
}

echo "Exemplos :"."<br>"."<hr>";
$inputString = "(bar)";
print_r (reverseInParentheses($inputString));
echo "<hr>";

$inputString = "foo(bar)baz";
print_r (reverseInParentheses($inputString));
echo "<hr>";

$inputString = "foo(bar)baz(blim)";
print_r (reverseInParentheses($inputString));
echo "<hr>"."<hr>";

echo "Questão 10 (resposta) :"."<br>"."<br>";
$inputString =  "foo(bar(baz))blim" ;
print_r (reverseInParentheses($inputString));
echo "<hr>";

?>