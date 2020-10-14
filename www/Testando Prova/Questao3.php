<?php

$inputArray = [5, 6, -4, 2, 3, 2, -23];


function adjacentElementsProduct($inputArray) 
{
    $max = 0;
    for($i = 0; $i < (sizeof($inputArray) - 1); $i++){
        $b = $i+1;
        if($inputArray[$i] > 0 && $inputArray[$b] > 0){
           $max = (($inputArray[$i] * $inputArray[$b]) > $max) ? ($inputArray[$i] * $inputArray[$b]) : $max;
        }
    }

    return $max;
}

echo adjacentElementsProduct($inputArray);

?>