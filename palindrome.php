<?php

$word=$_GET["word"];
$response=["checker"=> true];

function check($words) {
    if(strlen($words)==0){
      $response["checker"]= true;
    }
    else{

      for ($i = 0; $i < strlen($words) ; $i++) {
      
        if ($words[$i] == $words[strlen($words)-$i-1]) {
          $response["checker"]= true;
        }
        else{
          $response["checker"]= false;
          break;
        }
      
    }
    }
    
  
  echo json_encode($response);
  
}
  check($word);
?>