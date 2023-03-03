<?php

$email=$_POST["email"];
$password=$_POST["password"];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);


if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo "False";
}else {
    echo "True";
}

?>