<?php
$server = "web_development-db-1";
$username = "root";
$password = "1234";
$database = "kalyan";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>