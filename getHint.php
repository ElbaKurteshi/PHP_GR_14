<?php
// Array with names
$a[] = "Alba";
$a[] = "Blinera";
$a[] = "Benxhellushja";
$a[] = "Diana";
$a[] = "Elba";
$a[] = "Fiona";
$a[] = "Fitore";
$a[] = "Fjolla";
$a[] = "Ira";
$a[] = "Jonida";
$a[] = "Kiara";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Orika";
$a[] = "Pranvera";
$a[] = "Rinesa";
$a[] = "Qendresa";
$a[] = "Valmira";
$a[] = "Pajtesa";
$a[] = "Edona";
$a[] = "Ema";
$a[] = "Sara";
$a[] = "Tea";
$a[] = "Uvejsa";
$a[] = "Violeta";
$a[] = "Liza";
$a[] = "Elizabeta";
$a[] = "Elda";
$a[] = "Wendi";
$a[] = "Valeza";
$a[] = "Blenda";

// merr parametrin q prej URL
$q = $_REQUEST["q"];

$hint = "";

// shikojme gjithe hintat ne array ku $q eshte ndryshe"" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


