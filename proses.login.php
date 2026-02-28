<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM tbl_user_serli febriani
WHERE email='$email' AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){
    $_SESSION['user'] = $data['user_name'];
    header("location:dashboard.php");
}else{
    echo "<script>
    alert('Email dan Password Salah!');
    window.location='login.php';
    </script>";
}
?>