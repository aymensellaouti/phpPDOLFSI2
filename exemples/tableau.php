<?php

$tab = [
    'bonjour',
    12
];
$tab = array('bonojour 2', 234);

for($i = 0; $i<count($tab); $i++) {
    echo $tab[$i].'<br>';
}

$tab[]= 'nouvelle valeur';

echo "Affichage du tableau qui a ".count($tab)." cases";
foreach ($tab as $elementTableau) {
    echo $elementTableau.'<br>';
}

echo(count($tab));