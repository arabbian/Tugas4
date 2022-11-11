<?php
if ($_POST) {
    $id_dosen = $_POST['id_dosen'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telephone = $_POST['telephone'];


    if (empty($nama)) {
        echo "<script>alert('Nama Dosen tidak boleh kosong');
		location.href = 'edit_dosen.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat Dosen tidak boleh kosong');
            location.href = 'edit_dosen.php';</script>";
    } elseif (empty($telephone)) {
        echo "<script>alert('telephone Mahasiswa tidak boleh kosong');
            location.href = 'edit_dosen.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($name_dosen)) {
            $update = mysqli_query($koneksi, "update dosen set nama_dosen ='" . $nama . "',alamat='" . $alamat . "',telephone='" . $telephone . "'where id_dosen='" . $id_dosen . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update dosen'); location.href = 'data_dosen.php';</script>";
            } else {
                echo "<script>alert('Gagal update dosen'); location.href = 'edit_dosen.php' ? id_dosen = " . $id_dosen . "';</script>";
            }
        } else {
            $update = mysqli_query($koneksi, "update dosen set nama_dosen ='" . $nama . "',alamat='" . $alamat . "',telephone='" . $telephone . "'where id_dosen='" . $id_dosen . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update dosen'); location.href = 'data_dosen.php';</script>";
            } else {
                echo "<script>alert('Gagal update dosen'); location.href = 'edit_dosen.php' ? id_dosen = " . $id_dosen . "';</script>";
            }
        }

    }
}
?>