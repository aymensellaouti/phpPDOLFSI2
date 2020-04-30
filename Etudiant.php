<?php

require 'Personne.php';

class Etudiant extends Personne
{
    //Redefinition
    function sePresenter()
    {
        parent::sePresenter();
        echo '<br>Je suis un étudiant';
    }
    //Surcharge
    function f(int $x) {}
}