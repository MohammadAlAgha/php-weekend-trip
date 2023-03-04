<?php

$word=$_GET["word"];
$checker=0;
function check($words) {
    for ($i = 0; $i < strlen($words) ; $i++) {
      for ($j=strlen($words); $j >=0; $j--) { 
        if ($words[$i] == $words[$j]) {
          $checker++;
        }
        else{
          $checker=0;
        }
      }
    }
    if ($checker== strlen($words)/2){
      echo "Palindrome";
    }
    else echo"NOT Palindrome";
  
}
  check($word)
?>


//   $j =  strlen($words) - 1 - $i;
    //   if ($words[$i] == $words[$j]) {
    //     $portion = array_slice($i + 1, $j - 1);
    //     check($portion);
    //     if (strlen($portion) == 1) {
    //       echo True;
    //     }
    //    else {
    //     echo false;
    //     break;
    //    }
    //   }
    // 