<?php
include './config/koneksi-db.php';
include './config/konfigurasi-umum.php';
include './helpers/helper_umum.php';

session_start();



if (!isset($_SESSION['id_admin'])) {
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard | Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<?php include "{$_PATH_APP}/layout/container.php" ?>

	<script src="./assets/js/app.js"></script>
</body>

</html>