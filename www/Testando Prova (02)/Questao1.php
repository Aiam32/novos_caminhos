<?php

function centuryFromYear( $year)  
{
// O ano não pode ser negativo
if ($year <= 0)
echo "0 e negativo não é permitido para year";
// Se o ano estiver entre 1 e 100, será o século 1
else if ($year <= 100)
    echo "centuryFromYear($year) =\n";
            
else if ($year > 100 % 100 == 0)
        echo $year / 100 ," centuryFromYear($year) = ";
else
    echo " centuryFromYear($year) = ";    
            echo floor($year / 100) + 1;
}
// Driver Code
$year = 374;
    centuryFromYear($year);

?>