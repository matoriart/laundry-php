<?php
if($_POST){
$username=$_POST['username'];
$password=$_POST['password'];
if(empty($username)){
echo "<script>alert('Username tidak boleh kosong');location.href='../login.php';</script>";
} elseif(empty($password)){
echo "<script>alert('Password tidak boleh kosong');location.href='../login.php';</script>";
} else {
include "../db/koneksi.php";
$qry_cek=mysqli_query($conn,"select * from user where
username = '".$username."' and password = '".md5($password)."'");
if(mysqli_num_rows($qry_cek)>0){
    session_start();
    $dt_login=mysqli_fetch_array($qry_cek);
    $_SESSION['id_user']=$dt_login['id_user'];
    $_SESSION['nama_user']=$dt_login['nama_user'];
    $_SESSION['role']=$dt_login['role'];
    $_SESSION['id_outlet']=$dt_login['id_outlet'];
    $_SESSION['status_login']=true;
    header("location: ../home-index/home.php");
} else {
echo "<script>alert('Username dan Password tidak benar');location.href='../login.php';</script>";
}
}
}
?>