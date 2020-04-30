<?php
session_start();
if(!isset($_SESSION['nbVisite'])) {
    echo "Bienvenu C'est votre première visite :D";
    $_SESSION['nbVisite']=1;
} else {
    $_SESSION['nbVisite']++;
    echo "Bienvenu C'est votre visite numéro ${_SESSION['nbVisite']} :D";
}
