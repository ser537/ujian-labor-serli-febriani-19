?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna - Manajemen Informatika</title>
    <style>
        * { font-family: "Trebuchet MS", Arial, sans-serif; box-sizing: border-box; }
        body { margin: 0; padding: 0; background-color: #f4f4f4; }
        
        .container {
            width: 95%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            min-height: 450px;
            border: 1px solid #333;
            position: relative;
        }
        .header-table {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        table { border-collapse: collapse; width: 100%; margin-bottom: 50px; }
        table th { background-color: #ccc; border: 1px solid #333; padding: 10px; }
        table td { border: 1px solid #333; padding: 8px; }
        
        .btn-tambah {
            text-decoration: none;
            color: black;
            padding: 5px 25px;
            border: 2px solid #333;
            border-radius: 20px;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            border-top: 1px solid #333;
            padding: 10px;
            font-size: 12px;
            background: #eee;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php include('menu.php'); ?>

<div class="container">
    <p>List Data Pengguna</p>
    
    <div class="header-table">
        <span>&nbsp;</span> <a href="tambah_pengguna.php" class="btn-tambah">Tambah</a>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>id_pengguna</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tbl_user_serli febriani_19 ORDER BY id ASC";
            $result = mysqli_query($koneksi, $query);
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td align='center'>$no</td>";
                echo "<td>" . ($row['id_user'] ?? $row['id']) . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . ($row['Level'] ?? '-') . "</td>";
                echo "<td align='center'>
                        <a href='edit_pengguna.php?id=".$row['id']."'>Edit</a> | 
                        <a href='hapus_pengguna.php?id=".$row['id']."' onclick='return confirm(\"Hapus?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>