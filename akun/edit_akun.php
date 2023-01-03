<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $IdAkun = $_POST ['id_akun'];
    $Name = $_POST ['name'];
    $Email = $_POST['email'];
    $Password = $_POST ['password'];
    


$sql = "UPDATE akun 
        SET
            name = '$Name',
            email = '$Email',
            password = '$Password'
            WHERE id_akun = '$IdAkun'";
    


    require_once ('../koneksi.php');

if (mysqli_query($con,$sql)){
    echo 'Berhasil Edit Akun';
}else{
    echo 'Gagal Edit Akun';
}
mysqli_close($con);
}
?>