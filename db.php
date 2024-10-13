<?php

// $server = "localhost";
// $username = "root";
// $password = "";

// $conn = mysqli($server,$username,$password);

// if($conn->connect_error){
//     echo "error";
// }
// else{
//     echo"connection successfully";
// }
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="amazondb";

$sqlconnect = mysqli($servername,$username,$password,$dbname);

if($sqlconnect->connect_error){

	echo "error";
}





?>