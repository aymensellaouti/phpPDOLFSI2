<?php

function showTabAssoc($tabAssoc) {
    foreach ($tabAssoc as $cle => $valeur) {
        echo $cle. ' :  '.$valeur.'<br>';
    }
}
function somme () {
    $s = 0;
    for ($i=0;$i<func_num_args();$i++){
        $s+=func_get_arg($i);
    }
    return $s;
}
//echo somme(3,4,5,4,6,7);

function somme2(...$args) {
    $s = 0;
    showTabAssoc($args);
    foreach ($args as $entier) {
        $s+=$entier;
    }
    return $s;
}
//echo somme2(1,2,3,4,5,6,7,8,9);
$som = 0;
$prod = 0;
function somProd($x,$y, &$som,&$prod) {
    $som = $x+$y;
    $prod = $x*$y;
    echo "In somProd : som = $som et prod= $prod <br>";
}
echo "Avant somProd : som = $som et prod= $prod <br>";
somProd(3,4,$som,$prod);
echo "Après somProd : som = $som et prod= $prod <br>";