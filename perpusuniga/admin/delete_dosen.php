<?php
if ($_GET['id_dosen']) {
    include "../koneksi.php";
    $qry_hapus = mysqli_query($koneksi, "delete from dosen where id_dosen='" . $_GET['id_dosen'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses menghapus dosen');location.href='data_dosen.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus dosen');location.href='data_dosen.php';</script>";
    }
}
?>