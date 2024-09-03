<?php

$row = 0;
$num = 0;
$offset = 0;
if (!isset($_POST['cari'])) { // Jika tidak melakukan pencarian anggota
    /*** Pagination ***/
    if (isset($_GET['num'])) { // Jika menggunakan pagination
        $num = (int)$_GET['num'];

        $offset = pagination($num, $_QUERY_LIMIT);
    }
} else { // Jika melakukan pencarian anggota
    /*** Pencarian ***/
    $kata_kunci = $_POST['kata_kunci'];

    if (!empty($kata_kunci)) {
        /* Query Pencarian */
    }
}
?>

<div id="container">
    <div class="page-title">
        <h3>Data Penerbit</h3>
    </div>
    <div class="page-content">
        <div class="table-upper">
            <div class="table-upper-left">
                <a href="index.php?p=anggota-tambah" class="btn-success btn-medium">Tambah</a>
                <a href="./app/anggota-cetak-daftar.php" title="Cetak Anggota" target="_blank">
                    <img src="./assets/img/print.png" width="50" class="btn-print">
                </a>
            </div>
            <div class="table-upper-right">
                <form name="pencarian_anggota" action="" method="post" class="mg-top-15 text-right">
                    <input type="text" name="kata_kunci">
                    <input type="submit" name="cari" value="Cari">
                </form>
            </div>
        </div>

        <?php

        ?>
        <table class="data-table">
            <tr>
                <th>ID Penerbit</th>
                <th>Nama Penerbit</th>
            </tr>
        </table>
        <div class="table-lower">
            <div class="table-lower-left mg-top-5">
                Jumlah Data: <?php echo $row; ?>
            </div>
            <div class="table-lower-right text-right">
                <?php if (!isset($_POST['cari'])) { // disable pagination untuk pencarian 
                ?>
                    <ul class="table-pagination">
                        <?php
                        $page_num = ceil($row / $_QUERY_LIMIT);

                        for ($i = 1; $i <= $page_num; $i++) {
                        ?>
                            <li><a href="index.php?p=anggota&num=<?php echo $i; ?>" <?php echo ($num == $i || ($num == 0 && $i == 1)) ? 'class="active"' : '' ?>><?php echo $i; ?></a></li>
                    <?php
                        }
                    }
                    ?>
                    </ul>
            </div>
        </div>
    </div>
</div>