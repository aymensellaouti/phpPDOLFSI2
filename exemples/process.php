<?php
function showTabAssoc($tabAssoc) {
    foreach ($tabAssoc as $cle => $valeur) {
        echo $cle. ' :  '.$valeur.'<br>';
    }
}
echo '<br>'.'GET : ';
var_dump($_GET);
echo '<br>'.'POST : ';
showTabAssoc($_POST);

