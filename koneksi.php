<?php
$server = "localhost" ;
$user = "root";
$password = "";
$database = "api_smkn10";
$con = mysqli_connect($server, $user, $passrod, $database);
if (mysqli_connect_errno()){
    echo "Gagal terhubung MySQL: " . mysqli_connect_error(10);
}
?>