<?php
$year=$_POST["year"];

function primeEven($birth){
    $ourYear= date("Y");
    $response = [
        "even" => "false",
        "prime" => "false"
    ];
    $age=$ourYear-$birth;
     if($age%2==0){
            $response["even"] = "true";
        }
     for($i=2; $i<=$age; $i++){
        if(($age % $i) !== 0){
            $response ["prime"] = "true";
        }}

  echo json_encode($response);
}
primeEven($year);

?>