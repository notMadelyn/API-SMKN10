<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    // $IdAkun = $_POST ['id_akun'];
    $Name = $_POST ['name'];
    $Email = $_POST['email'];
    $Password = $_POST ['password'];



$sql = "INSERT INTO akun (name,email,password) VALUES ('$Name' , '$Email' , '$Password')";

require_once ('../koneksi.php');

if (mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan Akun';
}else{
    echo 'Gagal Menambahkan Akun';
}
mysqli_close($con);
}
?>