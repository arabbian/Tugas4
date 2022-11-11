<?php
if ($_POST) {
    $id_matkul = $_POST['id_matkul'];
    $matkul = $_POST['matkul'];


    if (empty($matkul)) {
        echo "<script>alert('Nama MataKuliah tidak boleh kosong');
		location.href = 'edit_matkul.php';</script>";

    } else {
        include "../koneksi.php";
        if (empty($matkul)) {
            $update = mysqli_query($koneksi, "update matkul set nama_matkul ='" . $matkul . "'where id_matkul='" . $id_matkul . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update matkul'); location.href = 'data_matkul.php';</script>";
            } else {
                echo "<script>alert('Gagal update matkul'); location.href = 'edit_matkul.php' ? id_matkul = " . $id_matkul . "';</script>";
            }
        } else {
            $update = mysqli_query($koneksi, "update matkul set nama_matkul ='" . $matkul . "'where id_matkul='" . $id_matkul . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update matkul'); location.href = 'data_matkul.php';</script>";
            } else {
                echo "<script>alert('Gagal update matkul'); location.href = 'edit_matkul.php' ? id_matkul = " . $id_matkul . "';</script>";
            }
        }

    }
}
?>