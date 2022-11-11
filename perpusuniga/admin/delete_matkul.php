<?php
if ($_GET['id_matkul']) {
    include "../koneksi.php";
    $qry_hapus = mysqli_query($koneksi, "delete from matkul where id_matkul='" . $_GET['id_matkul'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses menghapus matkul');location.href='data_matkul.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus matkul');location.href='data_matkul.php';</script>";
    }
}
?>