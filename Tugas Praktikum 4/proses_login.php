<?php
$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "admin@gmail.com" && $password == "123456"){
    header("Location:dashboard.php");
}
else{
    echo "Somethimg Wromg";
}