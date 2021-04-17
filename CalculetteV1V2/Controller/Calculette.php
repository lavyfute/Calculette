<?php
require_once("Calcul.php");

if(isset($_GET["resultat"])){
    
    $operant1=$_POST["operant1"];
    $operant2=$_POST["operant2"];
    $var=$_GET["var1"];
    $resultatPropose=$_GET["resultat"];
    
    $res=somManuel($operant1,$operant2,$resultatPropose);
    echo($resultatPropose);

}
if(isset($_GET["resultat"])){
    
}

?>