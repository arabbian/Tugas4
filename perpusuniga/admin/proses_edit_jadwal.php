<?php
if ($_POST) {
    $id_jadwal = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];


    if (empty($hari)) {
        echo "<script>alert('Nama Dosen tidak boleh kosong');
		location.href = 'edit_jadwal.php';</script>";
    } elseif (empty($jam)) {
        echo "<script>alert('Alamat Dosen tidak boleh kosong');
            location.href = 'edit_jadwal.php';</script>";
    } elseif (empty($matkul)) {
        echo "<script>alert('telephone Mahasiswa tidak boleh kosong');
            location.href = 'edit_jadwal.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($q)) {
            $update = mysqli_query($koneksi, "update jadwal set hari ='" . $hari . "',jam='" . $jam . "',id_matkul='" . $matkul . "',id_dosen='" . $dosen . "'where id_jadwal='" . $id_jadwal . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update Data Jadwal'); location.href = 'data_jadwal.php';</script>";
            } else {
                echo "<script>alert('Gagal update Data Jadwal'); location.href = 'edit_dosen.php' ? id_jadwal = " . $id_jadwal . "';</script>";
            }
        } else {
            $update = mysqli_query($koneksi, "update jadwal set nama_dosen ='" . $nama . "',alamat='" . $alamat . "',telephone='" . $telephone . "'where id_jadwal='" . $id_jadwal . "'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update Data Jadwal'); location.href = 'data_jadwal.php';</script>";
            } else {
                echo "<script>alert('Gagal update Data Jadwal'); location.href = 'edit_dosen.php' ? id_jadwal = " . $id_jadwal . "';</script>";
            }
        }

    }
}
?>