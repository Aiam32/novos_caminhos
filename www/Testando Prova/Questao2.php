<?php
function checkPalindrome($string) 
{
if ($string == strrev($string))
    // 1 = True; É um palíndromo
    return 1;
else
	return 0;
    // 0 = False; Não é um palíndromo
}

echo checkPalindrome('zzzazzazz')."\n";

?>