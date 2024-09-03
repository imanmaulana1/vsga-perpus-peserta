<?php

include './config/koneksi-db.php';

$username = 'admin';
$password = 'vsga';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES (1, '{$username}', '{$hashedPassword}', '{$username}')";

if (mysqli_query($db_conn, $sql)) {
    echo 'User berhasil ditambahkan!';
} else {
    echo 'Error: ' . mysqli_error($db_conn);
}

mysqli_close($db_conn);
