<div id="wrapper">

    <?php include "{$_PATH_APP}/layout/header.php" ?>

    <?php include "{$_PATH_APP}/layout/sidebar-menu.php" ?>

    <?php
    /* Menentukkan halaman berdasarkan menu yang dipilih */
    $app_dir = $_PATH_APP;

    $p = ''; // variable untuk menentukkan halaman yang dituju
    if (isset($_GET['p'])) { // memeriksa variable
        $p = $_GET['p'];
    }

    /* Lakukan include file *.php sesuai halaman yang dituju */
    if (!empty($p)) {
        $file = $app_dir . '/' . $p . '.php';

        if (file_exists($file)) { // memeriksa apakah file *.php tersedia?
            include $file;
        } else {
            include $app_dir . '/404.php';
        }
    } else {
        include $app_dir . '/beranda.php';
    }
    ?>

    <?php include "{$_PATH_APP}/layout/footer.php" ?>

</div>