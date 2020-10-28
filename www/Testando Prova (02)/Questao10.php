<?php

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