<?php
$servername = "filmlovers.cvvdf4otwo3r.eu-central-1.rds.amazonaws.com";
$username = "filmloversuser";
$password = "Apb87D2Y"; // Apb87D2Y
$dbname = "odev";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";



?>