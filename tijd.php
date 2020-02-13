<?php
    $getal = readline();
    if((bool)strpos($getal , "s")){
        echo trim($getal,"s") . (" seconden"); 
    }
    else{
        echo (PHP_EOL."Geen tijd gevonden");
    }
?>