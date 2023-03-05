<?php

$word=$_GET['word'];
function reverse($mix){
    $separate=str_split($mix);
    $pure=[];
    for ($i=0; $i <count($separate); $i++) { 
        if(!is_numeric($separate[$i])){
            array_push($pure,$separate[$i] );
            $separate[$i]="#";
        }
    }
    $reversedPure=array_reverse($pure);
    for ($i=0; $i < count($separate) ; $i++) { 
        for ($j=0; $j < count($reversedPure) ; $j++) { 
            if ($separate[$i]=="#") {
               $separate[$i]=$reversedPure[$j];
               array_shift($reversedPure);
            }
        }
    }
    $str=implode($separate);
    echo $str;
}

echo reverse($word);
?>