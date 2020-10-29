<?php

$host = "localhost";
$user = "root";
$pasword = "password";
$dbName = "ImePrezimeGod";

/*$con = mysqli_connect ($host, $user, $pasword, $dbName);

if(mysqli_connect_errno()){
    echo "failed";
    exit ();
}

echo "success";*/


try{
    $con = new PDO("mysql:host=$host;dbname=$dbName", $user, $pasword);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "succ123ess";
}
catch (PDOException $e){
    echo "error" . $e->getMessage();
}

?>