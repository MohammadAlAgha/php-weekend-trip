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

$sequence=$_GET["sequence"];

$array = [];

for ($i=0; $i < strlen($sequence); $i++) { 
   if ($sequence[$i]!==",") {
    array_push($array,$sequence[$i]);
   }
}
$s= sizeof($array);
selectionsort($array,$s);

$selected=join(",",$array);
$response=[
   "result"=> $selected
]; 

echo json_encode($response);

?>