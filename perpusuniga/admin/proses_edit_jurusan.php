<?php
if ($_POST) {
    $id_jurusan = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];


    if (empty($jurusan)) {
        echo "<script>alert('Nama jurusan tidak boleh kosong');
		location.href = 'edit_jurusan.php';</script>";

    } else {
        include "../koneksi.php";
        if (empty($jurusan)) {
            $update = mysqli_query($koneksi, "update jurusan set nama_jurusan ='" . $jurusan . "'where id_jurusan='" . $id_jurusan . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update jurusan'); location.href = 'data_jurusan.php';</script>";
            } else {
                echo "<script>alert('Gagal update jurusan'); location.href = 'edit_jurusan.php' ? id_jurusan = " . $id_jurusan . "';</script>";
            }
        } else {
            $update = mysqli_query($koneksi, "update jurusan set nama_jurusan ='" . $jurusan . "'where id_jurusan='" . $id_jurusan . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update jurusan'); location.href = 'data_jurusan.php';</script>";
            } else {
                echo "<script>alert('Gagal update jurusan'); location.href = 'edit_jurusan.php' ? id_jurusan = " . $id_jurusan . "';</script>";
            }
        }

    }
}
?>