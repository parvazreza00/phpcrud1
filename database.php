<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "phpcrud";
//database connection;
$conn = mysqli_connect($servername, $username, $password, $db);

//check connection
if(mysqli_connect_error()){
    echo "Failed to connection to MySWL: " . mysqli_connect_error();
    exit();
}
?>