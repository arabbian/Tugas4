<?php
if ($_GET['id_jadwal']) {
    include "../koneksi.php";
    $qry_hapus = mysqli_query($koneksi, "delete from jadwal where id_jadwal='" . $_GET['id_jadwal'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses menghapus jadwal');location.href='data_jadwal.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus jadwal');location.href='data_jadwal.php';</script>";
    }
}
?>