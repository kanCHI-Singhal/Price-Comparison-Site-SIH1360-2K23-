<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    echo "success";
    die("Error". mysqli_connect_error());
 }
else{
    echo "success";
}

?>
