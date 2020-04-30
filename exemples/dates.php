<?php
function showTabAssoc($tabAssoc) {
    foreach ($tabAssoc as $cle => $valeur) {
        echo $cle. ' :  '.$valeur.'<br>';
    }
}
showTabAssoc(getdate());

echo date("d-M-Y");