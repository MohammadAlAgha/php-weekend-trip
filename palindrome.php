<?php

$word=$_GET["word"];

function check($words) {
    for ($i = 0; $i < strlen($words) ; $i++) {
      $j =  strlen($words) - 1 - $i;
      if ($words[$i] == $words[$j]) {
        $portion = array_slice($i + 1, $j - 1);
        check($portion);
        if (strlen($portion) = 1) {
          echo True;
        }
      } else {
        echo false;
        break;
      }
    }
  }
  




?>