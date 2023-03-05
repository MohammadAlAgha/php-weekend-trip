<?php

$word=$_POST["word"];

function consonants($words) {
    $str = "";
    $newest ="";
    for ($i = 0; $i < strlen($words); $i++) {
      if (
        $words[$i] != "a" &&
        $words[$i] != "o" &&
        $words[$i] != "e" &&
        $words[$i] != "i" &&
        $words[$i] != "u"
      ) {
        $str.=$words[$i];
      } else {
        break;
      }
      $newest = substr($words,$i + 1);
    }
     $response=$newest.$str."ay";
     echo $response;
  }
  consonants($word);
  
?>