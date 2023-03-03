<?php

function selectionsort(&$Array, $n) {
    for($i=0; $i<$n; $i++) {
      $min_idx = $i;
  
      for($j=$i+1; $j<$n; $j++) {
        if($Array[$j] < $Array[$min_idx])
        {$min_idx = $j;}
      }
  
      $temp = $Array[$min_idx];
      $Array[$min_idx] = $Array[$i];
      $Array[$i] = $temp;
    }
  }
  
 //source: alpha coding skills 

$word=$_GET["word"];

$array = [];

for ($i=0; $i < strlen($word); $i++) { 
   if ($word[$i]!==",") {
    array_push($array,$word[$i]);
   }
}
$s= sizeof($array);
selectionsort($array,$s);

$selected=join(",",$array);
echo $selected;

?>