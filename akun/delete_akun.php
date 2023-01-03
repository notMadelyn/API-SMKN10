<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $IdAkun = $_POST ['id_akun'];
    



$sql = "DELETE FROM akun WHERE id_akun = '$IdAkun'";

require_once ('../koneksi.php');

if (mysqli_query($con,$sql)){
    echo 'Berhasil Delete Akun';
}else{
    echo 'Gagal Delete Akun';
}
mysqli_close($con);
}
?>