<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"SELECT k.*, j.gaji_pokok, j.tunjangan_jabatan
FROM tbl_karyawan_serli k
JOIN tbl_jabatan_serli j ON k.id_jabatan=j.id_jabatan
WHERE k.id_karyawan='$id'");

$data = mysqli_fetch_assoc($query);
echo json_encode($data);
?>