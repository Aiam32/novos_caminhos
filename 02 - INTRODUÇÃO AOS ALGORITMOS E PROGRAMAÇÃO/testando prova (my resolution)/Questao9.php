<?php
function sortByHeight($a) 
{
    $keys = array_keys($a, -1);
    $sort_me = array_diff($a, [-1]);
    asort($sort_me);
    $sorted = array_values($sort_me);
    foreach($keys as $key) 
    {
        array_splice($sorted, $key, 0, -1);
                                            }
    return $sorted;
}

//Exemplo : 
var_dump(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180]));
// [-1, 150, 160, 170, -1, -1, 180, 190,]
echo "<hr>"."<hr>";

//Questão 9 (resposta) :
var_dump(sortByHeight([23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3]));
//  [1, 3, -1, 23, 43, -1, -1, 54, -1, -1, -1, 77]

?>