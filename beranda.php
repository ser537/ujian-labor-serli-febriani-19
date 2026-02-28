<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>

<h2>Dashboard Administrator</h2>
<h3>Selamat Datang, <?php echo $_SESSION['user']; ?></h3>

<a href="logout.php">Logout</a>